<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('email', 30);
            $table->unsignedTinyInteger('permiso')->default(1)->comment('1: Permiso 1, 2: Permiso 2, 3: Permiso 3');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}