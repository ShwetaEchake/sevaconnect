<?php

namespace Database\Seeders;

use App\Models\SoevaluationDocuments;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EvaluationDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evalDocuments = [
            [
                'id' => 1,
                'name' => '12 A',
            ],
            [
                'id' => 2,
                'name' => '80 G',
            ],
            [
                'id' => 3,
                'name' => 'FCRA',
            ],
            [
                'id' => 4,
                'name' => 'Trust deed/MOA',
            ],
            [
                'id' => 5,
                'name' => 'Audit report(last year)',
            ],
            [
                'id' => 6,
                'name' => 'Brochure',
            ],
            [
                'id' => 7,
                'name' => 'PAN card number',
            ],
            [
                'id' => 8,
                'name' => 'Short profile',
            ],
            [
                'id' => 9,
                'name' => 'Salary sheet last year',
            ],
            [
                'id' => 10,
                'name' => 'Introductory letter',
            ],

            [
                'id' => 11,
                'name' => 'Expense sheet annual',
            ],





        ];

        foreach($evalDocuments as $documents)
        {
            SoevaluationDocuments::updateOrCreate([
                'id' => $documents["id"],
            ],[
                'id' => $documents["id"],
                'name' => $documents["name"],
            ]);
        }
    }
}
