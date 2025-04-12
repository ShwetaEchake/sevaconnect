<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Sector;
use App\Models\SubSector;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('onboard_sectors_subsectos', function (Blueprint $table) {
            $table->id();


            $table->foreignIdFor(Sector::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(SubSector::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('onboard_sectors_subsectos');
    }
};
