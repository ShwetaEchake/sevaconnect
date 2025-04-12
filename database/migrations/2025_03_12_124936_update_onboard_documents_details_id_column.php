<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('onboards', function (Blueprint $table) {
            $table->unsignedBigInteger('onboard_documents_details_id')->nullable()->change(); // Allow NULL
        });
    }

    public function down(): void {
        Schema::table('onboards', function (Blueprint $table) {
            $table->unsignedBigInteger('onboard_documents_details_id')->change(); // Revert changes
        });
    }
};
