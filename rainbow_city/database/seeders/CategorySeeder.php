<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Amis',
            'sub_category' => 'status',
            'sub_name' => 'Entre Amis',
        ]);
        DB::table('categories')->insert([
            'name' => 'Amoureux',
            'sub_category' => 'status',
            'sub_name' => 'En Amoureux',
        ]);
        DB::table('categories')->insert([
            'name' => 'Animaux',
            'sub_category' => 'status',
            'sub_name' => 'Avec des Animaux',
        ]);
        DB::table('categories')->insert([
            'name' => 'Collègues',
            'sub_category' => 'status',
            'sub_name' => 'Entre Collègues',
        ]);
        DB::table('categories')->insert([
            'name' => 'Divertissement',
            'sub_category' => 'activity',
            'sub_name' => 'Divertissement',
        ]);
        DB::table('categories')->insert([
            'name' => 'Famille',
            'sub_category' => 'status',
            'sub_name' => 'En Famille',
        ]);
        DB::table('categories')->insert([
            'name' => 'Gastronomie',
            'sub_category' => 'activity',
            'sub_name' => 'Gastronomie',
        ]);
        DB::table('categories')->insert([
            'name' => 'Histoire',
            'sub_category' => 'activity',
            'sub_name' => 'Histoire',
        ]);
        DB::table('categories')->insert([
            'name' => 'Insolite',
            'sub_category' => 'activity',
            'sub_name' => 'Insolite',
        ]);
        DB::table('categories')->insert([
            'name' => 'Nature',
            'sub_category' => 'activity',
            'sub_name' => 'Nature',
        ]);
        DB::table('categories')->insert([
            'name' => 'PMR',
            'sub_category' => 'status',
            'sub_name' => 'PMR',
        ]);
        DB::table('categories')->insert([
            'name' => 'Résident',
            'sub_category' => 'status',
            'sub_name' => 'Résident',
        ]);
        DB::table('categories')->insert([
            'name' => 'Senior',
            'sub_category' => 'status',
            'sub_name' => 'Senior',
        ]);
        DB::table('categories')->insert([
            'name' => 'Solo',
            'sub_category' => 'status',
            'sub_name' => 'En Solo',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sportif',
            'sub_category' => 'status',
            'sub_name' => 'Sportif',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sport',
            'sub_category' => 'activity',
            'sub_name' => 'Sport',
        ]);
    }
}
