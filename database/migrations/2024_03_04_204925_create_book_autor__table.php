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
        Schema::create('book_autor_', function (Blueprint $table) {
            $table->integer('book_id')->unsigned();
            $table->integer('autor_id')->unsigned();
        
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('autor_id')->references('id')->on('autors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_autor_');
    }
};
