<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SubSector;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('recommendation_sectors', function (Blueprint $table) {
            $table->foreignIdFor(SubSector::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recommendation_sectors', function (Blueprint $table) {
            Schema::dropIfExists('recommendation_sectors');
        });
    }
};
