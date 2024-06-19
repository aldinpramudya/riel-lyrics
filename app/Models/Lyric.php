<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lyric extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_song',
        'lyrics_language',
        'lyrics',
    ];

    protected $dates = ['deleted_at'];

    public function song()
    {
        return $this->belongsTo(Song::class, 'id_song', 'id');
    }


}
