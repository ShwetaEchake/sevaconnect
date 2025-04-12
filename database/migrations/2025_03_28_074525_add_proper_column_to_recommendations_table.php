<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\NgoType;
use App\Models\SubSector;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {
            $table->string('user_type',100)->nullable()->after('is_visited');
			$table->foreignIdFor(NgoType::class);
			$table->string('managing', 100)->nullable();
            $table->text('contact_address')->nullable()->after('managing');
            $table->string('contact_pincode',10)->nullable()->after('contact_address');
            $table->text('area')->nullable()->after('contact_pincode');
            $table->string('email',100)->nullable()->after('area');
            $table->string('year')->nullable()->after('email');
            $table->foreignIdFor(SubSector::class);
            $table->text('vision_induction')->nullable();
            $table->text('current')->nullable()->after('vision_induction');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recommendations', function (Blueprint $table) {

        $table->dropColumn([
        'user_type',
        'managing',
        'contact_address',
        'contact_pincode',
        'area',
        'email',
        'year',
        'vision_induction',
        'current'

        ]);
	  });
    }
};
