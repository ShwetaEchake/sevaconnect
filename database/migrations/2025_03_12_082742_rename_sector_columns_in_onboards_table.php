<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('onboards', function (Blueprint $table) {
           
            $table->dropForeign(['sector_id']);
            $table->dropForeign(['subsector_id']);

            
            $table->renameColumn('sector_id', 'onboard_sector');
            $table->renameColumn('subsector_id', 'onboard_subsector');

            
            $table->foreign('onboard_sector')->references('id')->on('sectors')->onDelete('cascade');
            $table->foreign('onboard_subsector')->references('id')->on('subsectors')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('onboards', function (Blueprint $table) {
           
            $table->dropForeign(['onboard_sector']);
            $table->dropForeign(['onboard_subsector']);

           
            $table->renameColumn('onboard_sector', 'sector_id');
            $table->renameColumn('onboard_subsector', 'subsector_id');

            
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
            $table->foreign('subsector_id')->references('id')->on('subsectors')->onDelete('cascade');
        });
    }
};

