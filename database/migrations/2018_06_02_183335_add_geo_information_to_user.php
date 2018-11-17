<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGeoInformationToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('country_id')->unsigned()->nullable();
            $table->integer('state_province_id')->unsigned()->nullable();
            $table->integer('city_id')->unsigned()->nullable();
            $table->foreign('country_id','USER_COUNTRY_ID_FK')
                ->references('id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('state_province_id','USER_STATE_PROVINCE_ID_FK')
                ->references('id')
                ->on('state_provinces')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('city_id','USER_CITY_ID_FK')
                ->references('id')
                ->on('cities')
                ->onUpdate('cascade')
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('USER_COUNTRY_ID_FK');
            $table->dropForeign('USER_STATE_PROVINCE_ID_FK');
            $table->dropForeign('USER_CITY_ID_FK');
            $table->dropColumn(['country_id','state_province_id','city_id']);
        });
    }
}
