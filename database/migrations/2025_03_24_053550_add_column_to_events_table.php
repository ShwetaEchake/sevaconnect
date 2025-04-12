<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->text('help_name')->nullable();
            $table->text('need_name')->nullable();
            $table->text('need_skill')->nullable();
            $table->text('need_space')->nullable();
            $table->text('need_other')->nullable();
            $table->text('event_recurrent')->nullable();
            $table->date('event_to_date')->nullable();
            $table->text('event_multiple_image')->nullable();
            $table->text('financial_recurrent')->nullable();
            $table->date('financial_date')->nullable();
            $table->date('financial_to_date')->nullable();
            $table->text('need_address')->nullable();
            $table->text('need_summary')->nullable();
            $table->text('need_multiple_image')->nullable();
            $table->text('material_type')->nullable();
            $table->text('material_other')->nullable();
            $table->date('job_date')->nullable();
            $table->date('job_to_date')->nullable();
            $table->text('job_address')->nullable();
            $table->text('job_summary')->nullable();
            $table->text('job_multiple_image')->nullable();
            $table->unsignedInteger('financial_amount');
            $table->string('need_image', 255)->nullable();
            $table->unsignedInteger('material_amount')->nullable();
            $table->string('job_image', 255)->nullable();
        });
    }


    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {

            $table->dropColumn([
                'help_name','need_name', 'need_skill', 'need_space', 'need_other',
                'event_recurrent', 'event_date', 'event_to_date', 'event_address',
                 'event_multiple_image', 'financial_recurrent',
                'financial_date', 'financial_to_date', 'need_address',
                'need_summary', 'need_multiple_image', 'material_type',
                'material_other', 'job_date', 'job_to_date', 'job_address',
                'job_summary', 'job_multiple_image'
            ]);

            $table->text('event_image')->nullable()->change();
            $table->text('need_image')->nullable()->change();
            $table->text('job_image')->nullable()->change();
            $table->text('financial_amount')->nullable()->change();
            $table->text('material_amount')->nullable()->change();
        });
    }
};
