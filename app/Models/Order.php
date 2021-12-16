<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $orderid
 * @property int $userId
 * @property string $p_id
 * @property int $orderdetail_pk
 * @property bool $status
 * 
 * @property Orderdetail $orderdetail
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	protected $primaryKey = 'orderid';
	public $timestamps = false;

	protected $casts = [
		'userId' => 'int',
		'orderdetail_pk' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'userId',
		'p_id',
		'orderdetail_pk',
		'status'
	];

	public function orderdetail()
	{
		return $this->belongsTo(Orderdetail::class, 'orderdetail_pk');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'p_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
