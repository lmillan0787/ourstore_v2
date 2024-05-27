<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
               'name_spanish' => 'Belleza',
               'name_english' => 'Beauty',
               'created_by'   => 1,
               'updated_by'   => null

            ],
            [
                'name_spanish' => 'Moda',
                'name_english' => 'Fashion',
                'created_by'   => 1,
                'updated_by'   => null
            ],
            [
                'name_spanish' => 'Bebes',
                'name_english' => 'Kids',
                'created_by'   => 1,
                'updated_by'   => null
            ],
            [
                'name_spanish' => 'Tecnologia',
                'name_english' => 'Technology',
                'created_by'   => 1,
                'updated_by'   => null
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
