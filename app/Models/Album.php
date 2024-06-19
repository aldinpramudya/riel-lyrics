<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_artist',
        'title',
        'release_date',
    ];

    protected $dates = ['deleted_at'];
    
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'id_artist', 'id');
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
