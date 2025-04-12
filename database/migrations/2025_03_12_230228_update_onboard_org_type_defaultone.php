<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('onboards', function (Blueprint $table) {
            $table->unsignedBigInteger('onboard_org_type')->default(1)->change();
        });
    }

    public function down() {
        Schema::table('onboards', function (Blueprint $table) {
            $table->unsignedBigInteger('onboard_org_type')->nullable()->change();
        });
    }
};
