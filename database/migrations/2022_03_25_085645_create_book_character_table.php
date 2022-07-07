<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_character', function (Blueprint $table) {
            $table->bigInteger('book_id');
            $table->foreign('book_id')
                ->references('id')
                ->on('characters')
                ->onDelete('cascade')
                ->nullable();
                
            $table->bigInteger('character_id')->unique();
            $table->foreign('character_id')
                ->references('id')
                ->on('characters')
                ->onDelete('cascade')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_character');
    }
}
