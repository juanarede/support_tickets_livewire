<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            $table->datetime('fecha_de_cierre');
            $table->string('asunto');
            $table->text('comentario');
            $table->string('estatus')->comment('opciones: abierto, cerrado, pediente');

            $table->integer('id_sla');
            $table->string('categoria')->comment('opciones: equipo_de_computo, impresion, etc.');
            $table->string('numero_de_serie');
            $table->string('modelo');
            $table->string('numero_de_activo')->comment('numero de inventario');
            $table->string('prioridad_cliente');
            $table->string('prioridad_agente');

            $table->foreignId('parent_id')->constrained('tickets');
            $table->foreignId('cliente_id')->constrained('users');
            $table->foreignId('agente_id')->constrained('users');

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
        Schema::dropIfExists('tickets');
    }
}

