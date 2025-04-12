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
        Schema::table('events', function (Blueprint $table) {
            $columns = [
                'event_summary',
                'event_image',
                'event_address',
                'event_date',
                'help_name',
                'need_name',
                'need_skill',
                'need_space',
                'need_other',
                'event_recurrent',
                'event_to_date',
                'event_multiple_image',
                'financial_recurrent',
                'financial_date',
                'financial_to_date',
                'need_address',
                'need_summary',
                'need_multiple_image',
                'material_type',
                'material_other',
                'job_date',
                'job_to_date',
                'job_address',
                'job_summary',
                'job_multiple_image',
                'financial_amount',
                'need_image',
                'material_amount',
                'job_image',
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('events', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->text('event_summary')->nullable();
            $table->string('event_image', 255)->nullable();
            $table->text('event_address')->nullable();
            $table->date('event_date')->nullable();
            $table->string('help_name', 255)->nullable();
            $table->string('need_name', 255)->nullable();
            $table->string('need_skill', 255)->nullable();
            $table->string('need_space', 255)->nullable();
            $table->string('need_other', 255)->nullable();
            $table->boolean('event_recurrent')->default(false);
            $table->date('event_to_date')->nullable();
            $table->text('event_multiple_image')->nullable();
            $table->boolean('financial_recurrent')->default(false);
            $table->date('financial_date')->nullable();
            $table->date('financial_to_date')->nullable();
            $table->text('need_address')->nullable();
            $table->text('need_summary')->nullable();
            $table->text('need_multiple_image')->nullable();
            $table->string('material_type', 255)->nullable();
            $table->string('material_other', 255)->nullable();
            $table->date('job_date')->nullable();
            $table->date('job_to_date')->nullable();
            $table->text('job_address')->nullable();
            $table->text('job_summary')->nullable();
            $table->text('job_multiple_image')->nullable();
            $table->decimal('financial_amount', 10, 2)->default(0);
            $table->string('need_image', 255)->nullable();
            $table->decimal('material_amount', 10, 2)->default(0);
            $table->string('job_image', 255)->nullable();
        });
    }
};
