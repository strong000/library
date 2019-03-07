<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lendings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('member_id');
            $table->date('lending_date');
            $table->date('returned_date');
            $table->bigInteger('lateness_charge');
            $table->timestamps();

            $table->foreign('movie_id')
                  ->references('id')->on('movies')
                  ->onDelete('cascade');

            $table->foreign('member_id')
                  ->references('id')->on('members')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lendings');
    }
}
