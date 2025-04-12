<?php

namespace Database\Seeders;

use App\Models\OrganizationType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orgTypes = [
            [
                'id' => 1,
                'name' => 'NGO',
            ],
            [
                'id' => 2,
                'name' => 'Trust',
            ],
            [
                'id' => 3,
                'name' => 'Foundations',
            ],
            [
                'id' => 4,
                'name' => 'Volunteer Group',
            ],
            [
                'id' => 5,
                'name' => 'Community based organization',
            ],
        ];

        foreach($orgTypes as $orgType)
        {
            OrganizationType::updateOrCreate([
                'id' => $orgType["id"],
            ],[
                'id' => $orgType["id"],
                'name' => $orgType["name"],
            ]);
        }
    }
}
