<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
            $table->string('name');
            $table->string('gender');
            $table->string('culture');
            $table->string('born');
            $table->string('died');
            $table->enum('titles', ["",""])
            	->nullable();
            $table->string('father');
            $table->string('mother');
            $table->string('spouse');
            $table->enum('allegiances', ["",""])
            	->nullable();
            $table->enum('tvSeries', ["",""])
            	->nullable();
            $table->enum('playedBy',["",""])
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
        Schema::dropIfExists('characters');
    }
}
