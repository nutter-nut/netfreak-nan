<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
        'title',
        'hosting',
        'file_name',
    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

}
