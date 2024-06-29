<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\True_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('ppff_id');
            $table->unsignedBigInteger('nivel_id');
            $table->unsignedBigInteger('grado_id');
            $table->string('rude');
            $table->boolean('estado_e')->default(True);

            $table->foreign('persona_id')
                  ->references('id')
                  ->on('personas')
                  ->onDelete('cascade');
            $table->foreign('ppff_id')
                  ->references('id')
                  ->on('ppffs')
                  ->onDelete('cascade');

            $table->foreign('nivel_id')
                  ->references('id')
                  ->on('nivels')
                  ->onDelete('cascade');

            $table->foreign('grado_id')
                  ->references('id')
                  ->on('grados')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
