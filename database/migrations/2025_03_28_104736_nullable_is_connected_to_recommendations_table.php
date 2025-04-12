<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\OrganizationType;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->unsignedBigInteger('is_visited')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->string('org_name')->nullable()->change();
            $table->foreignIdFor(OrganizationType::class)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->unsignedTinyInteger('is_visited')->nullable(false)->change();
            $table->text('address')->nullable(false)->change();
            $table->string('org_name')->nullable(false)->change();
            $table->foreignIdFor(OrganizationType::class)->nullable(false)->change();
        });
    }
};
