<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormuserTable extends Migration
{
    public function up()
    {
        Schema::create('formuser', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable();
            $table->string('cedula', 20)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->enum('sexo', ['M', 'F'])->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('direccion')->nullable();
            $table->unsignedBigInteger('provincia_id');

            // Foreign key
            $table->foreign('provincia_id')->references('id')->on('provincias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formuser');
    }
}