<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookPovcharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_povcharacter', function (Blueprint $table) {
            $table->bigInteger('book_id');
            $table->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade')
                ->nullable();
                
            $table->bigInteger('povcharacter_id')->unique();
            $table->foreign('povcharacter_id')
                ->references('id')
                ->on('povcharacters')
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
        Schema::dropIfExists('book_povcharacter');
    }
}
