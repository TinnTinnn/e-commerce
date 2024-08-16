<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();
//         User::factory(2)->unverified()->create();
         Product::factory(10)->create()->each(function ($product) {
             $numReviews = random_int(5, 30);

             Review::factory()->count($numReviews)
                 ->good()
                 ->for($product)
                 ->create();
         });

        Product::factory(10)->create()->each(function ($product) {
            $numReviews = random_int(5, 30);

            Review::factory()->count($numReviews)
                ->average()
                ->for($product)
                ->create();
        });

        Product::factory(10)->create()->each(function ($product) {
            $numReviews = random_int(5, 30);

            Review::factory()->count($numReviews)
                ->bad()
                ->for($product)
                ->create();
        });

    {
        $this->call([
            RoleSeeder::class,
            ItemSeeder::class,
            MemberSeeder::class,
            BankSeeder::class
        ]);
    }


//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
