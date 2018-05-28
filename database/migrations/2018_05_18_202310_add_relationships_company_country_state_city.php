<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use database\types\CompanyType;

class AddRelationshipsCompanyCountryStateCity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('companies', function (Blueprint $table) {
            $table->enum('type',CompanyType::choices());
            $table->string('address');
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->string('zip', 12);
            $table->boolean('active')->default(false);
            $table->string('latitude');
            $table->string('longitude');
            $table->foreign('city_id','companies_city_id_foreign')->references('id')->on('cities')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('state_id','companies_state_id_foreign')->references('id')->on('state_provinces')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('country_id','companies_country_id_foreign')->references('id')->on('countries')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign('companies_city_id_foreign');
            $table->dropForeign('companies_state_id_foreign');
            $table->dropForeign('companies_country_id_foreign');
            $table->dropColumn('type');
            $table->dropColumn('address');
            $table->dropColumn('state_id');
            $table->dropColumn('city_id');
            $table->dropColumn('country_id');
            $table->dropColumn('zip');
            $table->dropColumn('active');
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');

        });
    }
}
