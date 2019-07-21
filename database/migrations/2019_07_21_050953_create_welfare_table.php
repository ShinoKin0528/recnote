<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWelfareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welfare', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->integer('starting_salary')->nullable();
            $table->string('holidays')->nullable();
            $table->string('paid_vacation')->nullable();
            $table->string('overtime')->nullable();
            $table->text('holidays_format')->nullable();
            $table->text('holidays_system')->nullable();
            $table->text('working_hours')->nullable();
            $table->text('social_insurance')->nullable();
            $table->text('allowance')->nullable();
            $table->text('education')->nullable();
            $table->text('get_license')->nullable();
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
        Schema::dropIfExists('welfare');
    }
}
