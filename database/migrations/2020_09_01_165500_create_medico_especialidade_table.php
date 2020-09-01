<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoEspecialidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_especialidade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')
                ->references('id')
                ->on('medicos')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
            $table->unsignedBigInteger('especialidade_id');
            $table->foreign('especialidade_id')
                ->references('id')
                ->on('especialidades')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
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
        Schema::dropIfExists('medico_especialidade');
    }
}
