<?php
use App\Models\OrganizationType;

use App\Models\OnboardSectorsSubsectos;
use App\Models\OnboardDocumentsDetails;

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
        Schema::create('onboards', function (Blueprint $table) {
            $table->id();
            $table->string('onboard_seva')->unique();
            $table->foreignId('organization_type_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('onboard_trustee');
            $table->string('onboard_name');
            $table->string('onboard_mobile');
            $table->string('onboard_address');
            $table->string('area_name');
            $table->string('onboard_email');
            $table->string('onboard_year');

            $table->foreignId('sector_id')->constrained('sectors')->onDelete('cascade');
            $table->foreignId('subsector_id')->constrained('subsectors')->onDelete('cascade');


            $table->string('vision_name');
            $table->string('current_name');
            $table->string('onboard_format');
            $table->string('current_benf');
            $table->string('sevakarar');
            $table->string('onboard_achiev');
            $table->string('onboard_future');
            $table->string('onboard_specific');
            $table->foreignIdFor(OnboardDocumentsDetails::class);
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
        Schema::dropIfExists('onboards');
    }
};
