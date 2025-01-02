<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	/** @use HasFactory<\Database\Factories\EventFactory> */
	use HasFactory;

	protected $fillable = [
		'name',
		'photo_path',
		'date',
		'date_finish',
		'show'
	];

	/**
	 * Get the photos for the event.
	 */
	public function photos()
	{
		return $this->hasMany(Photo::class);
	}

	/**
	 * Get the rewards associated with the event.
	 */
	public function rewards()
	{
		return $this->hasMany(Reward::class);
	}
}
