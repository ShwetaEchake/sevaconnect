<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up()
    {
        Schema::table('onboards', function (Blueprint $table) {
            $table->integer('onboard_org_type')->nullable()->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('onboards', function (Blueprint $table) {
            $table->integer('onboard_org_type')->nullable(false)->default(null)->change();
        });
    }
};
