<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliticiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicians', function (Blueprint $table) {
            $table->id();
            $table->String('name', 40);
            $table->String('gender', 20);
            $table->String('rank', 20);
            $table->String('electorate', 20);
            $table->String('image');
            $table->integer('party_id')->unsigned()->foreign('party_id')->references('id')->on('parties');
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
        Schema::dropIfExists('politicians');
    }
}
