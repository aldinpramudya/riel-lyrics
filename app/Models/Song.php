<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_album',
        'original_title',
        'alternate_title',
        'release_date',
        'youtube_link',
        'spotify_link',
    ];

    protected $dates = ['deleted_at'];

    public function album()
    {
        return $this->belongsTo(Album::class, 'id_album', 'id');
    }
}
