<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Configuro los campos visibles
    public $visible = ['idUsuario', 'idTipoUsuario', 'Nombre', 'Apellido', 'fechaNacimiento', 
                        'email', 'telefono', 'activo', 'eliminado'];
}
