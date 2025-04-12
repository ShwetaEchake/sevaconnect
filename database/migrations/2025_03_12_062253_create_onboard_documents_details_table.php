<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Onboard;
use App\Models\OnboardDocument;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('onboard_documents_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Onboard::class);
            $table->foreignIdFor(OnboardDocument::class);
            $table->string('file_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('onboard_documents_details');
    }
};
