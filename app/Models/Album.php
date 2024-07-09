<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title', 'artist_id', 'year', 'record_label_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
