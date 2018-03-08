<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address_line');
            $table->text("logo");
            $table->string('owner');
            $table->string('iata', 50);
            $table->string('postal_code', 50);
            $table->string('phone', 50);
            $table->string('fax', 50);
            $table->string('contact_email');
            $table->string('reservations_email');
            $table->string('business_identification_number');
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
        Schema::dropIfExists('companies');
    }
}
