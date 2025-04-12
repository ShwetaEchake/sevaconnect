<?php

use App\Models\Soevaluation;
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
        Schema::create('soevaluation_sectors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Soevaluation::class);
            $table->foreignIdFor(Sector::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soevaluation_sectors');
    }
};
