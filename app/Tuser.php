<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tuser extends Model
{
    protected $table = 'tipousuarios';
    protected $fillable  = ['nombre'];

}
