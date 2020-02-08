<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['title'];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
