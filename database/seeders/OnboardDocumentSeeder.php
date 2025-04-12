<?php

namespace Database\Seeders;

use App\Models\OnboardDocument;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OnboardDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $onboardDocuments = [
            [
                'id' => 1,
                'name' => 'Registration',
            ],
            [
                'id' => 2,
                'name' => 'CSR',
            ],
            [
                'id' => 3,
                'name' => 'PAN',
            ],
            [
                'id' => 4,
                'name' => '80G',
            ],
            [
                'id' => 5,
                'name' => '12A',
            ],
            [
                'id' => 6,
                'name' => 'FCRA',
            ],
            [
                'id' => 7,
                'name' => 'Applied in process',
            ],
        ];

        foreach($onboardDocuments as $onboarddoc)
        {
            OnboardDocument::updateOrCreate([
                'id' => $onboarddoc["id"],
            ],[
                'id' => $onboarddoc["id"],
                'name' => $onboarddoc["name"],
            ]);
        }
    }
}
