<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->unsignedBigInteger('subsector_id')->nullable()->change();
        });
    }

    public function down(): void {
        Schema::table('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->unsignedBigInteger('subsector_id')->nullable(false)->change();
        });
    }
};
