<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciasTable extends Migration
{
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->id();
            $table->string('cod', 191)->nullable();
            $table->string('nombre', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}