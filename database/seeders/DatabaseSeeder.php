<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(DefaultUserSeeder::class);
        $this->call(SectorSeeder::class);
         $this->call(SubSectorSeeder::class);
        $this->call(RecommendationSeeder::class);
        $this->call(EvaluationDocumentsSeeder::class);

        // $this->call(SoevaluationSeeder::class);
        // $this->call(OrganizationTypeSeeder::class);
    }
}
