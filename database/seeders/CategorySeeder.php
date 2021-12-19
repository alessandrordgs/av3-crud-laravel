<?php

namespace Database\Seeders;

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('categories')->insert([
    'uuid' => Str::uuid(),
    'name' => 'Frutas',
    'slug' => 'frutas',
    ]);
    DB::table('categories')->insert([
        'uuid' => Str::uuid(),
        'name' => 'Cremes e Geleias',
        'slug' => 'cremes-e-geleias'
        ]);
    
    }
}
