<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('horas')->default('0');
            $table->time('horainicio')->nullable();
            $table->time('horaconclusion')->nullable();
            $table->boolean('lunes');
            $table->boolean('martes');
            $table->boolean('miercoles');
            $table->boolean('jueves');
            $table->boolean('viernes');
            $table->boolean('sabado');
            $table->boolean('domingo');
            $table->double('precio');
            $table->boolean('presencial');
            $table->boolean('online');
            $table->string('incluye')->nullable();
            $table->string('descripción')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
