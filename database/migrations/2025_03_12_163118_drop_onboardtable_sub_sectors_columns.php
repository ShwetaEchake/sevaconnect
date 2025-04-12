<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::table('onboards', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();


            $table->dropForeign(['onboard_subsector']);


            $table->dropColumn('onboard_subsector');

            Schema::enableForeignKeyConstraints();
        });
    }



    public function down(): void
    {
        Schema::table('onboards', function (Blueprint $table) {

            $table->unsignedBigInteger('onboard_subsector')->nullable();


            $table->foreign('onboard_subsector')->references('id')->on('some_other_table')->onDelete('cascade');
        });
    }
};
