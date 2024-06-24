<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductVariation;
class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variations = [
            ['id'=>1,'attribute_id'=>1,'title'=>'Red'],
            ['id'=>2,'attribute_id'=>1,'title'=>'Blue'],
            ['id'=>3,'attribute_id'=>1,'title'=>'Green'],
            ['id'=>4,'attribute_id'=>1,'title'=>'Black'],
            ['id'=>5,'attribute_id'=>2,'title'=>'S'],
            ['id'=>6,'attribute_id'=>2,'title'=>'M'],
            ['id'=>7,'attribute_id'=>2,'title'=>'L'],
            ['id'=>8,'attribute_id'=>2,'title'=>'XL'],
            ['id'=>9,'attribute_id'=>2,'title'=>'XXL'],
        ];
        ProductVariation::insert($variations);
    }
}
