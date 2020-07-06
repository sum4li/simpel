<?php

use App\Models\Backend\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produts = [
            [
                'name'=>'Paket 1MB',
                'description'=>'-',
                'product_image'=>'-',
                'price'=>1500000
            ],
            [
                'name'=>'Paket 2MB',
                'description'=>'-',
                'product_image'=>'-',
                'price'=>2750000
            ],
            [
                'name'=>'Paket 4MB',
                'description'=>'-',
                'product_image'=>'-',
                'price'=>5500000
            ],
        ];

        foreach($produts as $row)
        {
            Product::create([
                'name'=>$row['name'],
                'description'=> $row['description'],
                'product_image'=> $row['product_image'],
                'price'=> $row['price']                
            ]);
        }
    }
}
