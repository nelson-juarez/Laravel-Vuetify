<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Configuro los campos visibles
    public $visible = ['id', 'cod', 'name', 'stock'];
}
