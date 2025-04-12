<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\NgoType;
use App\Models\SubSector;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {

            $table->unsignedBigInteger('ngo_type_id')->nullable()->change();
            $table->unsignedBigInteger('sub_sector_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {

            $table->unsignedBigInteger('ngo_type_id')->nullable(false)->change();
            $table->unsignedBigInteger('sub_sector_id')->nullable(false)->change();
        });
    }
};
