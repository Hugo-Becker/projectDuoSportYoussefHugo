<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            
            $table->string('clubName',100);
            $table->string('ville',100);
            $table->string('pays',100);
            $table->integer('maxPlayers');
            $table->integer('maxAvants');
            $table->integer('maxCentres');
            $table->integer('maxArrieres');
            $table->integer('maxRemplaçants');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipes');
    }
}
