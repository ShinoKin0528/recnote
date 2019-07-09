<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basics', function (Blueprint $table) {
            
            $table->string('headoffice_postalcode_first')->nullable()->change();
            $table->string('headoffice_postalcode_last')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basics', function (Blueprint $table) {
            
            $table->unsignedInteger('headoffice_postalcode_first')->nullable()->change();
            $table->unsignedInteger('headoffice_postalcode_last')->nullable()->change();
        });
    }
}
