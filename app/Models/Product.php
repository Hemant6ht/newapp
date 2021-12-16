<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property string $p_id
 * @property string $p_name
 * @property bool $p_status
 * @property string|null $p_img
 * @property int|null $p_price
 * @property int $p_quant
 * @property string|null $p_s_desc
 * @property string|null $p_f_desc
 * @property string $cat_id
 * 
 * @property Category $category
 * @property Collection|Cart[] $carts
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'p_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p_status' => 'bool',
		'p_price' => 'int',
		'p_quant' => 'int'
	];

	protected $fillable = [
		'p_name',
		'p_status',
		'p_img',
		'p_price',
		'p_quant',
		'p_s_desc',
		'p_f_desc',
		'cat_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'cat_id');
	}

	public function carts()
	{
		return $this->hasMany(Cart::class, 'p_id');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'p_id');
	}
}
