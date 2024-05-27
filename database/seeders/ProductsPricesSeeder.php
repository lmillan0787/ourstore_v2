<?php

namespace Database\Seeders;

use App\Models\ProductPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsPricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            [
                'product_id' => 1,
                'price' => 99.99,
                'taxes_id' => 2,
                'created_by' => 1
            ],
            [
                'product_id' => 2,
                'price' => 199.99,
                'taxes_id' => 3,
                'created_by' => 1
            ],
            [
                'product_id' => 3,
                'price' => 49.99,
                'taxes_id' => 1,
                'created_by' => 1
            ],
            [
                'product_id' => 4,
                'price' => 249.99,
                'taxes_id' => 4,
                'created_by' => 1
            ],
            [
                'product_id' => 5,
                'price' => 79.99,
                'taxes_id' => 2,
                'created_by' => 1
            ],
            [
                'product_id' => 6,
                'price' => 149.99,
                'taxes_id' => 3,
                'created_by' => 1
            ],
            [
                'product_id' => 7,
                'price' => 29.99,
                'taxes_id' => 1,
                'created_by' => 1
            ],
            [
                'product_id' => 8,
                'price' => 129.99,
                'taxes_id' => 4,
                'created_by' => 1
            ],
            [
                'product_id' => 9,
                'price' => 59.99,
                'taxes_id' => 2,
                'created_by' => 1
            ],
            [
                'product_id' => 10,
                'price' => 179.99,
                'taxes_id' => 3,
                'created_by' => 1
            ]
        ];

        foreach ($prices as $price) {
            ProductPrice::create($price);
        }
    }
}
