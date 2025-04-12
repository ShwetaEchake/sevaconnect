<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            if (Schema::hasColumn('events', 'event_name')) {
                $table->dropColumn('event_name');
            }
            if (Schema::hasColumn('events', 'event_address')) {
                $table->dropColumn('event_address');
            }
        });
    }


    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('event_name', 255)->nullable();
            $table->text('event_address')->nullable();
        });
    }
};

