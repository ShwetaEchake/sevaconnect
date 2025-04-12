<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorSeeder extends Seeder
{
    public function run(): void
    {
        $sectors = [
            ['id' => 1,'name' => 'Education', 'initial' => 'EDU','sector_image'=>'edu.png'],
            ['id' => 2,'name' => 'Enviornment', 'initial' => 'ENV','sector_image'=>'env.png'],
            ['id' => 3,'name' => 'Health', 'initial' => 'HEA','sector_image'=>'health.png'],
            ['id' => 4,'name' => 'Specially abled', 'initial' => 'SPL','sector_image'=>'specially.png'],
            ['id' => 5,'name' => 'Women', 'initial' => 'WO','sector_image'=>'womens.png'],
            ['id' => 6,'name' => 'Children', 'initial' => 'CHI','sector_image'=>'chi.png'],
            ['id' => 7,'name' => 'Human rights', 'initial' => 'HU','sector_image'=>'rights.png'],
            ['id' => 8,'name' => 'Civic responsibilities', 'initial' => 'CR','sector_image'=>'civi.png'],
            ['id' => 9,'name' => 'Senior citizens', 'initial' => 'SC','sector_image'=>'sie.png'],
            ['id' => 10,'name' => 'Art and culture', 'initial' => 'AC','sector_image'=>'art.png'],
            ['id' => 11,'name' => 'Food and nutrition', 'initial' => 'FN','sector_image'=>'fish.png'],
            ['id' => 12,'name' => 'Tribals/rural', 'initial' => 'TR','sector_image'=>'tribal.png'],
            ['id' => 13,'name' => 'Animals', 'initial' => 'AN','sector_image'=>'animals.png'],
            ['id' => 14,'name' => 'Prisons', 'initial' => 'PE','sector_image'=>'prisons.png'],
            ['id' => 15,'name' => 'Sports', 'initial' => 'SP','sector_image'=>'sportss.png'],
            ['id' => 16,'name' => 'Employment/Skill development', 'initial' => 'EM','sector_image'=>'emp.png'],
            ['id' => 17,'name' => 'Transgenders', 'initial' => 'TRANS','sector_image'=>'transgenders.png'],
            ['id' => 18,'name' => 'Advocacy', 'initial' => 'ADV','sector_image'=>'add.png'],
            ['id' => 19,'name' => 'Miscellaneous', 'initial' => 'MIS','sector_image'=>'misssd.png'],
            ['id' => 20,'name' => 'Others', 'initial' => 'Other','sector_image'=>'other.png'],
            ['id' => 21,'name' => 'Donation', 'initial' => 'Don','sector_image'=>'donation.png'],
            ['id' => 22,'name' => 'No Specific Interest', 'initial' => 'Don','sector_image'=>'nospecific.png'],

        ];

        foreach ($sectors as $sector)
        {
            Sector::updateOrCreate(
                ['id' => $sector['id']],
                ['id' => $sector['id'], 'name' => $sector['name'], 'initial' => $sector['initial'],'sector_image' => $sector['sector_image']]
            );
        }
    }
}
