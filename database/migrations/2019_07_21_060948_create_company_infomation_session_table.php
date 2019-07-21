<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInfomationSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infomation_session', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->text('question_point')->nullable();
            $table->text('company_atmosphere')->nullable();
            $table->text('employees_atmosphere')->nullable();
            $table->text('memo')->nullable();
            $table->text('good_point')->nullable();
            $table->text('bad_point')->nullable();
            $table->text('know_more')->nullable();
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
        Schema::dropIfExists('company_infomation_session');
    }
}
