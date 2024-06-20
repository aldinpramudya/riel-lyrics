<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'instagram_link',
        'youtube_link',
    ];

    protected $dates = ['deleted_at'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function song()
    {
        return $this->hasManyThrough(Song::class, Album::class);
    }
}
