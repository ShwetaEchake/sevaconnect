<?php

use App\Models\Recommendation;
use App\Models\Sector;
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
        Schema::create('recommendation_sectors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Recommendation::class);
            $table->foreignIdFor(Sector::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendation_sectors');
    }
};
