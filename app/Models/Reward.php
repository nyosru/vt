<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    /** @use HasFactory<\Database\Factories\RewardFactory> */
    use HasFactory;

	protected $fillable = [
		'name',
		'event_id',
		'user_id',
		'award_date',
		'status',
		'position',
		'photo_path',
	];

	/**
	 * Get the event that owns the reward.
	 */
	public function event()
	{
		return $this->belongsTo(Event::class);
	}

	/**
	 * Get the user that owns the reward.
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
