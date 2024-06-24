<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;
class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            ['id'=>1,'title'=>'color'],
            ['id'=>2,'title'=>'size'],
        ];
        Attribute::insert($attributes);
    }
}
