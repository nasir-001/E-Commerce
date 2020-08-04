<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Wrist Watches', 'slug' => 'wrist-watches', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Men Shoes', 'slug' => 'men-shoes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Women Bags', 'slug' => 'women-bags', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shadda', 'slug' => 'shadda', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Men Caps', 'slug' => 'men-caps', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Women Caps', 'slug' => 'women-caps', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Women Dress', 'slug' => 'women-dress', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Men Wallet', 'slug' => 'men-wallet', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
