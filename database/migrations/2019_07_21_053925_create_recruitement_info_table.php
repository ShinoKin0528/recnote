<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitementInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitement_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('apply_jobtype')->nullable();
            $table->string('interview_times')->nullable();
            $table->text('want_people')->nullable();
            $table->text('want_skills')->nullable();
            $table->text('test_info')->nullable();
            $table->text('handin_documents')->nullable();
            $table->text('aspiration_motive')->nullable();
            $table->text('pr_point')->nullable();
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
        Schema::dropIfExists('recruitement_info');
    }
}
