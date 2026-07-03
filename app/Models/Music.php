<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{

    protected $fillable = [
        'title',
        'artist',
    ];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
