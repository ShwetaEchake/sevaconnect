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
        Schema::table('onboards', function (Blueprint $table) {
            $table->dropForeign(['onboard_org_type']);
            $table->unsignedBigInteger('onboard_org_type')->default(1)->change();
            $table->foreign('onboard_org_type')->references('id')->on('onboards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('onboards', function (Blueprint $table) {
            $table->dropForeign('onboards_onboard_org_type_foreign');
            $table->unsignedBigInteger('onboard_org_type')->change();
            $table->foreign('onboard_org_type')->references('id')->on('onboards')->onDelete('cascade');
        });
    }
};
