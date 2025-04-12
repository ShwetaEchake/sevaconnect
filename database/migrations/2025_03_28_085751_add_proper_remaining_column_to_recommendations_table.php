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
        Schema::table('recommendations', function (Blueprint $table) {

            $table->text('area_interest')->nullable()->after('contact_pincode');
			$table->boolean('induction_cause')->nullable()->after('area_interest');
			$table->boolean('area_cause')->nullable()->after('induction_cause');
			$table->boolean('social_org')->nullable()->after('area_cause');
			$table->text('off_address')->nullable()->after('social_org');
			$table->string('off_pincode',10)->nullable()->after('off_address');
			$table->boolean('comfortable_call')->nullable()->after('off_pincode');
			$table->dateTime('time_date')->nullable()->after('comfortable_call');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->dropColumn([

                'area_interest',
                'area_cause',
                'social_org',
                'off_address',
                'off_pincode',
                'comfortable_call',
                'induction_cause',
                'time_date'
            ]);

        });
    }
};
