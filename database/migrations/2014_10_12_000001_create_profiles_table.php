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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id()->comment('Identificador único del perfil');
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->string('first_name', 50)->nullable(false)->comment('Nombre del miembro');
            $table->string('last_name', 50)->nullable(false)->comment('Apellido del miembro');
            $table->string('identity_document', 20)->unique()->nullable(false)->comment('Número de documento de identidad único del miembro');
            $table->string('profession', 100)->nullable()->comment('Profesión del miembro');
            $table->string('occupation', 100)->nullable()->comment('Ocupación o trabajo del miembro');
            $table->text('areas_of_expertise')->nullable()->comment('Áreas de conocimiento del miembro');
            $table->text('specializations')->nullable()->comment('Especializaciones del miembro');
            $table->text('phone')->nullable()->comment('Tléfono del miembro');
            $table->text('image')->nullable()->comment('Avatar');
            $table->text('address')->nullable()->comment('Dirección del miembro');
            $table->date('birthdate')->nullable()->comment('Fecha de nacimiento del miembro');
            // $table->enum('role', ['member', 'volunteer', 'staff', 'admin'])->default('member')->comment('Rol del miembro (miembro, voluntario, personal, administrador)');
            $table->enum('status', ['active', 'inactive'])->default('active')->comment('Estado del miembro (activo, inactivo)');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
