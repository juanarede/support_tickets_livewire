<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdTicket');
            $table->timestamp('Fecha_de_Creacion')->useCurrent();
            $table->string('UsuarioRemitente');
            $table->string('EmailRemitente');
            $table->string('UsuarioAsignado')->nullable();
            $table->string('EmailUsuarioAsignado')->nullable();
            $table->text('Mensajes');
            $table->timestamps();

            // Foreign key constraint
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
        Schema::dropIfExists('detalle_tickets');
    }
}
