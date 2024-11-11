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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('Autor');
            $table->unsignedBigInteger('category_id')->nullable()->comment('Categoría');
            $table->string('title')->comment('Título');
            $table->string('description')->nullable()->comment('Descripción del Post');
            $table->text('body')->comment('Texto');
            $table->string('file_url')->nullable()->comment('Archivo adjunto');
            $table->text('svg')->nullable()->comment('Icono');
            $table->smallInteger('order')->unsigned()->nullable()->comment('Orden');
            $table->smallInteger('weighting')->unsigned()->nullable()->comment('Ponderación');
            $table->enum('color_class', ['primary', 'secondary', 'positive','success', 'negative', 'warning', 'info', 'dark', 'white', 'black', 'slate', 'gray', 'zinc', 'neutral', 'stone', 'red', 'orange', 'amber', 'lime', 'green', 'emerald', 'teal', 'cyan', 'sky', 'blue', 'indigo', 'violet', 'purple', 'fuchsia', 'pink', 'rose','yellow'])->default('secondary')->comment('Color de la categoría');
            $table->boolean('status_hero')->default(false)->nullable()->comment('Disponible en hero');
            $table->boolean('status_posts')->default(false)->nullable()->comment('Disponible en últ. historias');
            $table->boolean('status_featured')->default(false)->nullable()->comment('Disponible historias destacadas');
            $table->boolean('status_projects')->default(false)->nullable()->comment('Disponible en Proyectos');
            $table->boolean('status_teams')->default(false)->nullable()->comment('Disponible en Directivos');
            $table->boolean('status_workers')->default(false)->nullable()->comment('Disponible en Equipo');
            $table->boolean('status_testimonials')->default(false)->nullable()->comment('Disponible en testimonios');
            $table->boolean('status_alliances')->default(false)->nullable()->comment('Disponible en Alianzas');
            $table->boolean('status_pinned')->default(false)->nullable()->comment('Anclado al inicio de la lista');
            $table->boolean('status_active')->default(false)->nullable()->comment('Activo');
            $table->boolean('status_published')->default(false)->nullable()->comment('Publicado');
            $table->boolean('status_help')->default(false)->nullable()->comment('Ayudas');
            $table->timestamps();
        
            // Definir la clave foránea correctamente
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
