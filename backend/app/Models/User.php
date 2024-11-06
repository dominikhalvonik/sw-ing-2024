<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $email
 * @property string|null $password
 * @property string|null $firstname
 * @property string|null $lastname
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'password',
		'firstname',
		'lastname'
	];

	public function articles()
	{
		return $this->hasMany(Article::class);
	}
}
