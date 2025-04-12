<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->foreignId('onboardids_id')
                ->after('sector_id')
                ->constrained('onboards')
                ->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::table('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->dropForeign(['onboardids_id']);
            $table->dropColumn('onboardids_id');
        });
    }
};


