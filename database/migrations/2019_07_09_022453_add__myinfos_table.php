<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMyinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Myinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('hope_industry')->nullable();;
            $table->string('hope_job_type')->nullable();;
            $table->text('what_future')->nullable();;
            $table->string('strength')->nullable();;
            $table->text('strength_detail')->nullable();;
            $table->text('strength_job')->nullable();;
            $table->string('study')->nullable();;
            $table->text('study_detail')->nullable();;
            $table->string('research')->nullable();;
            $table->text('research_detail')->nullable();;
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
        Schema::table('Myinfos', function (Blueprint $table) {
            //
        });
    }
}
