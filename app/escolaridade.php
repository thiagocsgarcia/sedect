<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escolaridade extends Model
{
    
    protected $fillable = [
        'id',
        'escolaridade'
    ];

    protected $table = 'escolaridade';
    
}
