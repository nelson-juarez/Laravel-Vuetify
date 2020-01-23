<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App;

class ProductosController extends Controller
{
    private $cantRegistros = 20;
    /** 
     * Función encargada de obtener productos. Los parámetros enviados setean el resultado
     * 
     * $orden: Determina el orden en el que se devuelven los datos.
     * $indice: Valor a partir del cual se devuelven los datos, teniendo en cuenta la cantidad de registros por página.
     * $numPagina: Indica el número de página inicial a partir del cual se devuelve el resultado.
     * $cantRegistros: Indica el número de registros por página, si no lo envían se toma como valor por defecto lo configurado en el controller de Producto.
     * */ 
    public function listarProductos($orden='id', $indice=0, $numPagina=0, $cantRegistros=0){
        $esValido = false;
        $objProd = new App\Producto; // Instancio el model Producto para obtener los campos visibles y verificar si lo ingresado es correcto.
        $tipoOrden = 'ASC'; // Valor por defecto para ordenar el campo en cuestión
        $tipoOrden = strpos($orden, '-') > -1?'DESC':'ASC';
        $orden = str_replace(['+', '-'], "", $orden);
                
        // Si se ingresa un campo que no existe en la tabla se pone por defecto el campo id para ordenarlo de forma ascendente.
        if( !in_array($orden, $objProd->visible) ){
            $orden = 'id';
            $tipoOrden = 'ASC';
        }

        // Si no envío la cantidad de registros por página tomo el valor configurado en el controller por defecto.
        $cantRegistros  = $cantRegistros === 0? $this->cantRegistros: $cantRegistros;

        // El Offset inicial será la cantidad de páginas * la cantidad de registros, si no mando la página inicial tengo que tomar el índice enviado.        
        $offsetInicial  = $numPagina? ($numPagina === 0 ? 1: --$numPagina) * $cantRegistros: $indice;
        // En todo caso resto uno para hacerlo inclusivo, salvo que el offset inicial = 0
        $offsetInicial  = $offsetInicial > 0 ? --$offsetInicial:$offsetInicial;
        // Obtengo los datos del model
        $productos      = App\Producto::orderBy($orden, $tipoOrden)->offset($offsetInicial)->limit($cantRegistros)->get();
                
        return $productos->toJson(JSON_PRETTY_PRINT);
    }
}
