<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('corporate_philosophy')->nullable();
            $table->text('service_product')->nullable();
            $table->string('to_client')->nullable();
            $table->text('uniqueness')->nullable();
            $table->text('future')->nullable();
            $table->text('important_point')->nullable();
            $table->text('feel_value')->nullable();
            $table->text('give_my_value')->nullable();
            $table->text('company_task')->nullable();
            $table->text('memo')->nullable();
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
        Schema::dropIfExists('detail');
    }
}
