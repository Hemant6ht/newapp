<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $userId
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $password
 * @property string $address
 * @property bool $status
 * 
 * @property Collection|Cart[] $carts
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'userId';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'mobile',
		'password',
		'address',
		'status'
	];

	public function carts()
	{
		return $this->hasMany(Cart::class, 'userId');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'userId');
	}
}
