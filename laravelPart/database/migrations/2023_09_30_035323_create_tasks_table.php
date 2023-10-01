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

        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->date("date");
            $table->unsignedBigInteger('state_id'); // Campo de clave foránea
            $table->string("author");
            $table->integer("likes")->default(0);

            $table->timestamps();
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
