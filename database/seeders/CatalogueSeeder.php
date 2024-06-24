<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalogue;
class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catalogue = [
            ['id'=>1,'name'=>'MEN','status'=>'Active'],
            ['id'=>2,'name'=>'WOMEN','status'=>'Active'],
            ['id'=>3,'name'=>'KIDS','status'=>'Active'],
            ['id'=>4,'name'=>'WEDDING','status'=>'Active'],
        ];
        Catalogue::Insert($catalogue);
    }
}
