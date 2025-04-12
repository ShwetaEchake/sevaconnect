<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\NgoType;
use Illuminate\Database\Seeder;

class NgoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ngoTypes = [
            [
                'id' => 1,
                'name' => 'Trust',
            ],
            [
                'id' => 2,
                'name' => 'Foundation',
            ],
            [
                'id' => 3,
                'name' => 'Societies',
            ],
            [
                'id' => 4,
                'name' => 'Other',
            ],

        ];

        foreach($ngoTypes as $ngosType)
        {
            NgoType::updateOrCreate([
                'id' => $ngosType["id"],
            ],[
                'id' => $ngosType["id"],
                'name' => $ngosType["name"],
            ]);
        }
    }
}
