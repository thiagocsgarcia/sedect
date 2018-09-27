<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    
    protected $fillable = [
        'id',
        'escolaridade'
    ];

    protected $table = 'escolaridade';
    
}
