∑<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',3);
            $table->string('name');
            //Google maps settings
            $table->json('center');
            $table->integer('zoom');
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
        Schema::dropIfExists('state_provinces');
    }
}
