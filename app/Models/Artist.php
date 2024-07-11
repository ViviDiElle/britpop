<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }
}
