<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('onboards', function (Blueprint $table) {
            $table->renameColumn('organization_type_id', 'onboard_org_type');
        });
    }

    public function down()
    {
        Schema::table('onboards', function (Blueprint $table) {
            $table->renameColumn('onboard_org_type', 'organization_type_id');
        });
    }
};
