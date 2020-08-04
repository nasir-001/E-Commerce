<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++) {
            Product::create([
                'name' => 'Yadi' .$i,
                'slug' => 'yadi-' .$i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])]. ' yard '.[1, 2, 3][array_rand([1, 2, 3])].' TB SSD, 10 YARD',
                'price' => rand(25000, 30000),
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium rerum provident enim ne',
            ])->categories()->attach(1);
            
        }

        $product = Product::find(1);
        $product->categories()->attach(2);

        for ($i = 1; $i <= 20; $i++) {
            Product::create([
                'name' => 'Kube' .$i,
                'slug' => 'kube' .$i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])]. ' size '.[1, 2, 3][array_rand([1, 2, 3])].' TB SSD, 10 YARD',
                'price' => rand(5000, 8000),
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium rerum provident enim ne',
            ])->categories()->attach(2);
            
        }

        for ($i = 1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Agogo' .$i,
                'slug' => 'watch' .$i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])]. ' size '.[1, 2, 3][array_rand([1, 2, 3])].' TB SSD, 10 YARD',
                'price' => rand(300, 5000),
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium rerum provident enim ne',
            ])->categories()->attach(3);
            
        }

        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Bags' .$i,
                'slug' => 'bags-' .$i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])]. ' size '.[1, 2, 3][array_rand([1, 2, 3])].' TB SSD, 10 YARD',
                'price' => rand(2500, 3000),
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium rerum provident enim ne',
            ])->categories()->attach(4);
            
        }

        for ($i = 1; $i <= 15; $i++) {
            Product::create([
                'name' => 'Shoes' .$i,
                'slug' => 'shoes-' .$i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])]. ' size '.[1, 2, 3][array_rand([1, 2, 3])].' TB SSD, 10 YARD',
                'price' => rand(2500, 3000),
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium rerum provident enim ne',
            ])->categories()->attach(5);
            
        }

        for ($i = 1; $i <= 19; $i++) {
            Product::create([
                'name' => 'Rings' .$i,
                'slug' => 'rings-' .$i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])]. ' size '.[1, 2, 3][array_rand([1, 2, 3])].' TB SSD, 10 YARD',
                'price' => rand(25000, 30000),
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium rerum provident enim ne',
            ])->categories()->attach(6);
            
        }

        for ($i = 1; $i <= 21; $i++) {
            Product::create([
                'name' => 'Caps' .$i,
                'slug' => 'caps-' .$i,
                'details' => [13, 14, 15][array_rand([13, 14, 15])]. ' size '.[1, 2, 3][array_rand([1, 2, 3])].' TB SSD, 10 YARD',
                'price' => rand(25000, 30000),
                'description' => 'Lorem '. $i. ' ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium rerum provident enim ne',
            ])->categories()->attach(7);
            
        }

    }
}
