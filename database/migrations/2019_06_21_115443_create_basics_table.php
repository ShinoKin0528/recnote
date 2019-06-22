<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('company_id');
            $table->string('website_url')->nullable();
            $table->integer('founding_year')->nullable();
            $table->bigInteger('capital')->nullable();
            $table->string('representative')->nullable();
            $table->integer('employees_number')->nullable();
            $table->string('headoffice_place')->nullable();
            $table->unsignedInteger('headoffice_postalcode_first')->nullable();
            $table->unsignedInteger('headoffice_postalcode_last')->nullable();
            $table->string('headoffice_address')->nullable();
            $table->string('stock_listing')->nullable();
            $table->string('memo')->nullable();
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
        Schema::dropIfExists('basics');
    }
}
