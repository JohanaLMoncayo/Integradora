<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacicovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacicovis', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',25);
            $table->string('apellido',25);
            $table->string('carrera',25);
            $table->date('fechaconsulta',25);
            $table->string('estatus',25);
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
        Schema::dropIfExists('pacicovis');
    }
}
