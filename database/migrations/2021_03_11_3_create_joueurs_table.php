<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();

            $table->string('nom',100);
            $table->string('prenom',100);
            $table->integer('age');
            $table->string('genre',100);
            $table->string('nat',100);
            $table->string('poste',100);
            $table->string('tel',100);
            $table->string('email',200);
            $table->unsignedBigInteger('equipe_id')->nullable();
            $table->foreign('equipe_id')->references('id')->on('equipes');
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->foreign('photo_id')->references('id')->on('photos');




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
        Schema::dropIfExists('joueurs');
    }
}
