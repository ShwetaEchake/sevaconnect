<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->tinyInteger('status')->default(0)->comment('0 = Pending, 1 = Approved, 2 = Rejected');
        });
    }
    public function down()
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
