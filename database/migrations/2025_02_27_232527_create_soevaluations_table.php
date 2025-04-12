<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('soevaluations', function (Blueprint $table) {
            $table->id();
            $table->string('eva_name');
            $table->string('mem_name');
            $table->string('mem_seva');
            $table->string('eva_org')->nullable();



            $table->string('eva_address')->nullable();
            $table->string('eva_incharge');
            $table->string('eva_in_no');
            $table->year('eva_year');
            $table->string('eva_letter')->nullable();

            $table->string('eva_gap')->nullable();
            $table->text('eva_existing')->nullable();
            $table->text('eva_up')->nullable();
            $table->text('eva_benefeed')->nullable();
            $table->text('eve_comments')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('soevaluations');
    }
};
