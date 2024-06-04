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
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdTicket')->nullable(); // For parent ticket relationship
            $table->timestamp('Fecha_de_Creacion')->useCurrent();
            $table->timestamp('Fecha_de_Cierre')->nullable();
            $table->timestamp('Fecha_de_Actualizacion')->useCurrent()->nullable();
            $table->string('Asunto');
            $table->text('Comentario');
            $table->string('UsuarioRemitente');
            $table->string('EmailRemitente');
            $table->string('UsuarioAsignado')->nullable();
            $table->string('EmailUsuarioAsignado')->nullable();
            $table->enum('Status', ['Abierto', 'Cerrado', 'Pendiente']);
            $table->integer('idSLA');
            $table->string('Categoria'); // Assuming categories are predefined strings
            $table->string('NumerodeSerie')->nullable();
            $table->text('Modelo')->nullable();
            $table->string('NumerodeActivo')->nullable();
            $table->string('Prioridad');
            $table->string('PrioridadAgente')->nullable();
            $table->timestamps();

            // Foreign key constraint for parent ticket relationship
            $table->foreign('IdTicket')->references('id')->on('tickets')->onDelete('cascade');
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

