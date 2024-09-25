<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('slug');
            $table->text('Descripcion');
            $table->integer('Cantidad');
            $table->double('Precio',10,2);
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('Categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
