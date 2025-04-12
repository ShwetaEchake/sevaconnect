<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SoevaluationSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('soevaluations')->insert([
            'eva_name' => 'John Doe',
            'mem_name' => 'Jane Doe',
            'mem_seva' => 'SEVA0001',
            'eva_org' => 'Helping Hands',
            'org_type' => 'NGO',
            'eva_address' => '123 Street, City',
            'eval_sector' => 'Health',
            'eva_incharge' => 'Dr. Smith',
            'eva_in_no' => '1234567890',
            'eva_year' => '2024',
            'eva_letter' => 'Letter_001.pdf',
            'eva_documents' => 'Report_001.pdf',
            'eva_gap' => 'Lack of Funds',
            'eva_existing' => 'Previous Project Ongoing',
            'eva_up' => 'New Project Initiated',
            'eva_benefeed' => '200+ People Benefited',
            'eve_comments' => 'Great Initiative',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_by' => null,
        ]);
    }
}
