<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->dropForeign(['subsector_id']);
            $table->dropColumn('subsector_id');
        });

        Schema::table('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->unsignedBigInteger('subsector_id')->nullable();
            $table->foreign('subsector_id')->references('id')->on('subsectors')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::table('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->dropForeign(['subsector_id']);
            $table->dropColumn('subsector_id');

            $table->unsignedBigInteger('subsector_id')->nullable(false);
            $table->foreign('subsector_id')->references('id')->on('subsectors')->onDelete('cascade');
        });
    }
};
