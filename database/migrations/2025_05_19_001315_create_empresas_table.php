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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('email', 100);
            $table->string('telefono', 9)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('youtube', 100)->nullable();
            $table->string('tiktok', 100)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('urlfoto', 100)->nullable();
            $table->boolean('publicado')->default(true);
            $table->integer('orden')->nullable();
            $table->integer('visitas')->nullable();
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
