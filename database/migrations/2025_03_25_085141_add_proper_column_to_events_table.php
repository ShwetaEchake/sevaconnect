<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->text('help_name')->nullable()->after('id');
            $table->text('need_name')->nullable()->after('help_name');
            $table->text('skill')->nullable()->after('need_name');
            $table->text('space')->nullable()->after('skill');
            $table->text('other')->nullable()->after('space');
            $table->date('to_date')->nullable()->after('other');
            $table->text('multiple_image')->nullable()->after('to_date');
            $table->text('recurrent')->nullable()->after('multiple_image');
            $table->date('from_date')->nullable()->after('recurrent');
            $table->text('address')->nullable()->after('from_date');
            $table->text('summary')->nullable()->after('address');
            $table->text('material_type')->nullable()->after('summary');
            $table->unsignedInteger('amount')->after('material_type');
            $table->string('image', 255)->nullable()->after('amount');

        });
    }

	 public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {

        $table->dropColumn([
        'summary',
        'image',
        'from_date',
        'address',
        'help_name',
        'need_name',
        'skill',
        'space',
        'other',
        'recurrent',
        'to_date',
        'multiple_image',
        'material_type',
		'amount'
        ]);
	  });
    }
};
