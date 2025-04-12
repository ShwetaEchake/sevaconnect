<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultStatusToSoevaluations extends Migration
{
    public function up()
    {
        Schema::table('soevaluations', function (Blueprint $table) {
            $table->integer('status')->default(0)->change();  // Set default value to 0
        });
    }

    public function down()
    {
        Schema::table('soevaluations', function (Blueprint $table) {
            $table->integer('status')->default(null)->change();  // Remove the default value
        });
    }
}
