<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $table = 'productos';
    public $id = 'id';
    public $timestamps = false;
    public $guarded = [];
}
