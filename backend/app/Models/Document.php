<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 * 
 * @property int $id
 * @property string $document_name
 * @property string|null $document_type
 * @property string|null $document_path
 * @property int $article_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 *
 * @package App\Models
 */
class Document extends Model
{
	protected $table = 'document';

	protected $casts = [
		'article_id' => 'int'
	];

	protected $fillable = [
		'document_name',
		'document_type',
		'document_path',
		'article_id'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}
}
