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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->comment('Nombre');
            $table->string('descriptions',192)->comment('Descripción');
            $table->enum('color_class', ['primary','secondary','positive','negative','warning','info','dark','white','black','slate','gray','zinc','neutral','stone','red','orange','amber','lime','green','emerald','teal','cyan','sky','blue','indigo','violet','purple','fuchsia','pink','rose'])->default('secondary')->comment('Color de la categoría');
            $table->smallInteger('order')->unsigned()->nullable()->comment('Orden');
            $table->boolean('status_navabar')->nullable()->default(false)->nullable()->comment('Disponible en el navabar del sitio');
            $table->boolean('status_aside')->nullable()->default(false)->nullable()->comment('Disponible en el aside');
            $table->boolean('status_active')->nullable()->default(false)->comment('Estado');
            $table->boolean('status_published')->nullable()->default(false)->comment('Publicado');
            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
