<?php

namespace Database\Seeders;

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        'uuid' => Str::uuid(),
        'category_id' => 1,
        'name' => 'Abacaxi',
        'slug' => 'abacaxi',
        'price' => 10.00
        ]);
        DB::table('products')->insert([
        'uuid' => Str::uuid(),
        'category_id' => 1,
        'name' => 'Abacate',
        'slug' => 'abacate',
        'price' => 8.00
        ]);
        }
       
}
