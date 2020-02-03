<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->integer('idUsuario')->autoIncrement();
            $table->integer('idTipoUsuario');
            $table->char('Nombre', 50);
            $table->char('Apellido', 50);
            $table->date('fechaNacimiento')->nullable();
            $table->char('email', 50);
            $table->char('telefono', 50)->nullable();
            $table->boolean('activo');
            $table->boolean('eliminado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
