<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubSector;
use App\Models\Sector;

class SubSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subsectors = [
            ['id'=> 1, 'sector_id' => 1,'name' => 'Scholarship', 'initial' => 'Sch'],
            ['id'=> 2, 'sector_id' => 1,'name' => 'study center', 'initial' => 'Sty'],
            ['id'=> 3, 'sector_id' => 1,'name' => 'Labs', 'initial' => 'Lab'],
            ['id'=> 4, 'sector_id' => 1,'name' => 'camps', 'initial' => 'Cam'],
            ['id'=> 5, 'sector_id' => 1,'name' => 'exhibitions', 'initial' => 'exh'],
            ['id'=> 6, 'sector_id' => 1,'name' => 'Guest talks', 'initial' => 'Gue'],
            ['id'=> 7, 'sector_id' => 1,'name' => 'value education', 'initial' => 'val'],
            ['id'=> 8, 'sector_id' => 1,'name' => 'Book Bank', 'initial' => 'book'],

            ['id'=> 10, 'sector_id' => 2,'name' => 'waste management and awareness', 'initial' => 'wst'],
            ['id'=> 11, 'sector_id' => 2,'name' => 'water conservation', 'initial' => 'wat'],
            ['id'=> 12, 'sector_id' => 2,'name' => 'plantation', 'initial' => 'Plan'],
            ['id'=> 13, 'sector_id' => 2,'name' => 'air pollution', 'initial' => 'air'],
            ['id'=> 14, 'sector_id' => 2,'name' => 'cleaning water bodies','initial' => 'clean'],
            ['id'=> 15, 'sector_id' => 2,'name' => 'Teaching composting and other such wet waste solutions', 'initial' => 'teach'],
            ['id'=> 16, 'sector_id' => 2,'name' => 'Dry waste solutions', 'initial' => 'Dry'],
            ['id'=> 17, 'sector_id' => 2,'name' => 'Domestic hazardous waste solutions', 'initial' => 'Doma'],
            ['id'=> 18, 'sector_id' => 2,'name' => 'Solar installation', 'initial' => 'Sola'],

            ['id'=> 19, 'sector_id' => 3,'name' => 'Mental', 'initial' => 'Men'],
            ['id'=> 20, 'sector_id' => 3,'name' => 'diagnostic', 'initial' => 'dia'],
            ['id'=> 21, 'sector_id' => 3,'name' => 'OPD', 'initial' => 'opd'],
            ['id'=> 22, 'sector_id' => 3,'name' => 'cancer', 'initial' => 'can'],
            ['id'=> 23, 'sector_id' => 3,'name' => 'Hygiene', 'initial' => 'Hyg'],
            ['id'=> 24, 'sector_id' => 3,'name' => 'Blood banks', 'initial' => 'Blod'],
            ['id'=> 25, 'sector_id' => 3,'name' => 'Blood disorder', 'initial' => 'Bld'],
            ['id'=> 26, 'sector_id' => 3,'name' => 'Financial aids', 'initial' => 'Fin'],
            ['id'=> 27, 'sector_id' => 3,'name' => 'ayurvedic', 'initial' => 'ayu'],
            ['id'=> 28, 'sector_id' => 3,'name' => 'Medical camps', 'initial' => 'Med'],
            ['id'=> 29, 'sector_id' => 3,'name' => 'Eye', 'initial' => 'Ey'],
            ['id'=> 30, 'sector_id' => 3,'name' => 'children', 'initial' => 'chi'],
            ['id'=> 31, 'sector_id' => 3,'name' => 'women', 'initial' => 'wo'],
            ['id'=> 32, 'sector_id' => 3,'name' => 'Awareness on organ donation, blood donation specific diseases etc', 'initial' => 'aw'],
            ['id'=> 33, 'sector_id' => 3,'name' => 'Medical services at home (emergency/ warboy, nursing staff etc)', 'initial' => 'med'],
            ['id'=> 34, 'sector_id' => 3,'name' => 'Deaddiction', 'initial' => 'dea'],

            ['id'=> 35, 'sector_id' => 4,'name' => 'Blindness', 'initial' => 'Men'],
            ['id'=> 36, 'sector_id' => 4,'name' => 'Deaf and mute', 'initial' => 'dia'],
            ['id'=> 37, 'sector_id' => 4,'name' => 'Limbs', 'initial' => 'Limbs'],
            ['id'=> 38, 'sector_id' => 4,'name' => 'Intellectually challenged', 'initial' => 'opd'],
            ['id'=> 39, 'sector_id' => 4,'name' => 'Spinal cord injury', 'initial' => 'can'],

            ['id'=> 40, 'sector_id' => 5,'name' => 'Empowerment', 'initial' => 'emp'],
            ['id'=> 41, 'sector_id' => 5,'name' => 'Domestic Abuse', 'initial' => 'dom'],
            ['id'=> 42, 'sector_id' => 5,'name' => 'Gender Equality','initial' => 'gen'],
            ['id'=> 43, 'sector_id' => 5,'name' => 'Hostel', 'initial' => 'hos'],
            ['id'=> 44, 'sector_id' => 5,'name' => 'Legal aid', 'initial' => 'leg'],

            ['id'=> 45, 'sector_id' => 6,'name' => 'Orphanage', 'initial' => 'orp'],
            ['id'=> 46, 'sector_id' => 6,'name' => 'daycare', 'initial' => 'day'],
            ['id'=> 47, 'sector_id' => 6,'name' => 'Support', 'initial' => 'supp'],
            ['id'=> 48, 'sector_id' => 6,'name' => 'Child abuse', 'initial' => 'chi'],
            ['id'=> 49, 'sector_id' => 6,'name' => 'Adoption', 'initial' => 'ado'],

            ['id'=> 50, 'sector_id' => 7,'name' => 'govt schemes', 'initial' => 'gov'],
            ['id'=> 51, 'sector_id' => 7,'name' => 'legal aid', 'initial' => 'legal'],
            ['id'=> 52, 'sector_id' => 7,'name' => 'Right to Information', 'initial' => 'Rig'],

            ['id'=> 53, 'sector_id' => 8,'name' => 'Road safety', 'initial' => 'roa'],
            ['id'=> 54, 'sector_id' => 8,'name' => 'Voting', 'initial' => 'vot'],
            ['id'=> 55, 'sector_id' => 8,'name' => 'Right to Information', 'initial' => 'righ'],

            ['id'=> 56, 'sector_id' => 9,'name' => 'Old age homes', 'initial' => 'old'],
            ['id'=> 57, 'sector_id' => 9,'name' => 'Communities', 'initial' => 'com'],

            ['id'=> 58, 'sector_id' => 10,'name' =>'Language', 'initial' => 'lan'],
                ['id'=> 59, 'sector_id' => 10,'name'  => 'singing', 'initial' => 'sin'],
                ['id'=> 60, 'sector_id' => 10,'name'  => 'dancing', 'initial' => 'dan'],
                ['id'=> 61, 'sector_id' => 10,'name'  => 'Monuments', 'initial' => 'monu'],
                ['id'=> 62, 'sector_id' => 10,'name'  => 'Indian art forms', 'initial' => 'ind'],


                    ['id'=> 63, 'sector_id' => 11,'name' => 'Malnourishment', 'initial' => 'mal'],
                    ['id'=> 64, 'sector_id' => 11,'name' => 'Free meals', 'initial' => 'free'],
                    ['id'=> 65, 'sector_id' => 11,'name' => 'Nutritional suppliments', 'initial' => 'nutri'],



                   ['id'=> 66, 'sector_id' => 12,'name' => 'Education', 'initial' => 'edu'],
                   ['id'=> 67, 'sector_id' => 12,'name' => 'Health', 'initial' => 'heal'],
                   ['id'=> 68, 'sector_id' => 12,'name' => 'Food and nutrition', 'initial' => 'food'],
                   ['id'=> 69, 'sector_id' => 12,'name' => 'water', 'initial' => 'wate'],



                ['id'=> 70, 'sector_id' => 13,'name'=> 'Shelter', 'initial' => 'shl'],
                ['id'=> 71, 'sector_id' => 13,'name' => 'ambulance', 'initial' => 'amb'],
                ['id'=> 72, 'sector_id' => 13,'name' => 'Wild life', 'initial' => 'wil'],
                ['id'=> 73, 'sector_id' => 13,'name' => 'Gaushalas', 'initial' => 'gau'],



                ['id'=> 74, 'sector_id' => 14,'name' => 'Education', 'initial' => 'edu'],
                ['id'=> 75, 'sector_id' => 14,'name' => 'Rehabilitation', 'initial' => 'reh'],
                ['id'=> 76, 'sector_id' => 14,'name' => 'food and nutrition', 'initial' => 'fo'],
                ['id'=> 77, 'sector_id' => 14,'name' => 'Meditation', 'initial' => 'med'],



                  ['id'=> 78, 'sector_id' => 15,'name' => 'Academy', 'initial' => 'aca'],
                  ['id'=> 79, 'sector_id' => 15,'name' => 'competitions', 'initial' => 'com'],
                  ['id'=> 89, 'sector_id' => 15,'name' => 'equipments', 'initial' => 'equ'],
                  ['id'=> 81, 'sector_id' => 15,'name' => 'monetary help', 'initial' => 'mon'],



                ['id'=> 82, 'sector_id' => 16,'name' => 'Computer courses', 'initial' => 'com'],
                ['id'=> 83, 'sector_id' => 16,'name' => 'Beauty', 'initial' => 'bea'],
                ['id'=> 84, 'sector_id' => 16,'name' => 'Banking', 'initial' => 'ban'],
                ['id'=> 85, 'sector_id' => 16,'name' => 'academy', 'initial' => 'ac'],




                ['id'=> 86, 'sector_id' => 17,'name' => 'Job', 'initial' => 'jb'],
                ['id'=> 87, 'sector_id' => 17,'name' => 'Govt schemes', 'initial' => 'Gov'],
                ['id'=> 88, 'sector_id' => 17,'name' => 'Medical aid', 'initial' => 'med'],

                ['id'=> 89, 'sector_id' => 18,'name' => 'Data analysis', 'initial' => 'da'],
                ['id'=> 90, 'sector_id' => 18,'name' => 'policy suggestion', 'initial' => 'pol'],
                ['id'=> 91, 'sector_id' => 18,'name' => 'Legal guidance', 'initial' => 'leg'],

                 ['id'=> 92, 'sector_id' => 19,'name' => 'Old stuff like clothes, bicycles etc collection', 'initial' => 'old'],
                 ['id'=> 93, 'sector_id' => 19,'name' => 'Old furniture', 'initial' => 'ofur'],
                 ['id'=> 94, 'sector_id' => 19,'name' => 'Medicines and equipments', 'initial' => 'med'],

        ];

        foreach ($subsectors as $sectorlist)
        {
            SubSector::updateOrCreate(
                ['id' => $sectorlist['id']],
                ['id' => $sectorlist['id'], 'sector_id' => $sectorlist['sector_id'],'name' => $sectorlist['name'], 'initial' => $sectorlist['initial']]

            );
        }
    }
}
