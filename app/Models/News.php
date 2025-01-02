<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */
    use HasFactory;


	protected $fillable = [
		'title',
		'description',
		'content',
		'photo',
		'published_at'
	];

	public function getPublishedAtAttribute($value)
	{
		return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
	}
}
