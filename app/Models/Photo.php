<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /** @use HasFactory<\Database\Factories\PhotoFactory> */
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'event_id',
        'user_id',
        'path'
    ];

	/**
	 * Get the event that owns the photo.
	 */
	public function event()
	{
		return $this->belongsTo(Event::class);
	}

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
