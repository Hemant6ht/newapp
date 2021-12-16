<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $userId
 * @property string $p_id
 * 
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class Cart extends Model
{
	protected $table = 'cart';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'userId' => 'int'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'p_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userId');
	}
}
