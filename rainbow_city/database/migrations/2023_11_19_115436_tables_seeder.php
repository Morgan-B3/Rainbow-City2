<?php

use App\Models\Comment;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Artisan::call('db:seed', [
            '--class' => \CategorySeeder::class,
        ]);
        Artisan::call('db:seed', [
            '--class' => \PlaceSeeder::class,
        ]);
        Artisan::call('db:seed', [
            '--class' => \PlacesCategoriesSeeder::class,
        ]);
        Artisan::call('db:seed', [
            '--class' => \UserSeeder::class,
        ]);
        Comment::factory(50)->create(function(){
            return[
                'rating' => rand(1,5),
                'user_id' => rand(1,3),
                'place_id' => rand(1,24),
            ];
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
