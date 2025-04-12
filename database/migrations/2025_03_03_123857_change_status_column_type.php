<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('soevaluations', function (Blueprint $table) {
            $table->string('status')->change();
        });
    }

    public function down()
    {
        Schema::table('soevaluations', function (Blueprint $table) {
            $table->integer('status')->change();
        });
    }
};
