<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Orderdetail
 * 
 * @property int $orderdetail_pk
 * @property int $quantity
 * @property int $contact
 * @property string $address
 * @property string $rcp_name
 * @property string $mop
 * @property int $pincode
 * @property int $total_price
 * 
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Orderdetail extends Model
{
	protected $table = 'orderdetails';
	protected $primaryKey = 'orderdetail_pk';
	public $timestamps = false;

	protected $casts = [
		'quantity' => 'int',
		'contact' => 'int',
		'pincode' => 'int',
		'total_price' => 'int'
	];

	protected $fillable = [
		'quantity',
		'contact',
		'address',
		'rcp_name',
		'mop',
		'pincode',
		'total_price'
	];

	public function orders()
	{
		return $this->hasMany(Order::class, 'orderdetail_pk');
	}
}
