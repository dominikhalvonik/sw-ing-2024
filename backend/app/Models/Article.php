<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * 
 * @property int $id
 * @property string $article_name
 * @property string|null $article_category
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Document[] $documents
 *
 * @package App\Models
 */
class Article extends Model
{
	protected $table = 'article';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'article_name',
		'article_category',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function documents()
	{
		return $this->hasMany(Document::class);
	}
}
