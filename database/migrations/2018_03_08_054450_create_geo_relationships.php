<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->integer('continent_id')->unsigned();
            $table->foreign('continent_id','COUNTRY_CONTINENT_ID_FK')
                ->references('id')
                ->on('continents')
                ->onDelete('cascade');
        });

        Schema::table('state_provinces', function (Blueprint $table) {
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id','STATE_COUNTRY_ID_FK')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->integer('state_province_id')->unsigned();
            $table->foreign('state_province_id','CITY_STATE_PROVINCE_ID_FK')
                ->references('id')
                ->on('state_provinces')
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
        Schema::table('countries', function (Blueprint $table) {
            $table->dropForeign('COUNTRY_CONTINENT_ID_FK');
            $table->dropColumn('continent_id');
        });

        Schema::table('state_provinces', function (Blueprint $table) {
            $table->dropForeign('STATE_COUNTRY_ID_FK');
            $table->dropColumn('country_id');
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->dropForeign('CITY_STATE_PROVINCE_ID_FK');
            $table->dropColumn('state_province_id');
        });

    }
}
