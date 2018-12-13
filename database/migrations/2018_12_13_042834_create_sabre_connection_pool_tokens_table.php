<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSabreConnectionPoolTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sabre_connection_pool_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token');
            $table->boolean('in_use');
            $table->integer('company_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('sabre_connection_pool_tokens', function (Blueprint $table) {

            $table->foreign('company_id', 'TOKEN_COMPANY_ID_FK')
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
        Schema::dropIfExists('sabre_connection_pool_tokens');
    }
}
