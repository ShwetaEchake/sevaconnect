<?php

use App\Models\OrganizationType;
use App\Models\Sector;
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
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->string('seva_id')->unique();
            $table->string('org_name');
            $table->foreignIdFor(OrganizationType::class);

            $table->text('address');
            $table->string('work_place')->nullable();
            $table->string('phone_no', 20)->nullable();
            $table->string('org_contact_name', 100)->nullable();
            $table->string('org_contact_no', 20)->nullable();
            $table->unsignedTinyInteger('is_connected')->default(0)->comment('0 = No , 1 = Yes');
            $table->string('contact_no', 20)->nullable();
            $table->unsignedTinyInteger('is_visited')->default(0)->comment('0 = No , 1 = Yes');
            $table->text('opinion')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
