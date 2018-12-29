<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use database\types\ModeType;


class CreateSabrePropertyConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sabre_property_configurations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('domain_dev');
            $table->string('organization_dev');
            $table->string('username_dev');
            $table->string('password_dev');
            $table->string('app_id_dev');
            $table->boolean('logs_enabled');
            $table->string('domain_prod');
            $table->string('organization_prod');
            $table->string('username_prod');
            $table->string('password_prod');
            $table->string('app_id_prod');
            $table->enum('mode',ModeType::choices())->nullable(false)->default(ModeType::getDefaultValue());
            $table->integer('company_id')->unsigned();

            $table->timestamps();
        });
        Schema::table('sabre_property_configurations', function (Blueprint $table) {

            $table->foreign('company_id', 'SABRE_CONFIGURATION_COMPANY_ID_FK')
                ->references('id')
                ->on('companies')
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
        Schema::dropIfExists('sabre_property_configurations');
    }
}
