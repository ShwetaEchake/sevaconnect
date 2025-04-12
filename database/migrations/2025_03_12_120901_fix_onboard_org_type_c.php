<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('onboards', function (Blueprint $table) {

            $table->dropForeign(['onboard_org_type']);


            $table->unsignedBigInteger('onboard_org_type')->nullable()->default(0)->change();


            $table->foreign('onboard_org_type')
                  ->references('id')
                  ->on('organization_types')
                  ->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::table('onboards', function (Blueprint $table) {

            $table->dropForeign(['onboard_org_type']);
            $table->unsignedBigInteger('onboard_org_type')->nullable(false)->change();
            $table->foreign('onboard_org_type')
                  ->references('id')
                  ->on('organization_types')
                  ->onDelete('cascade');
        });
    }
};
