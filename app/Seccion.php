<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    public $table = 'secciones';
    public $id = 'id';
    public $timestamps = false;
    public $guarded = [];
}
