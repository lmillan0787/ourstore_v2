<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovementInventoryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovementInventoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name_spanish' => 'Entrada',
                'name_english' => 'In',
                'created_by' => 1,
            ],
            [
                'name_spanish' => 'Salida',
                'name_english' => 'Out',
                'created_by' => 1,
            ]
        ];

        foreach ($types as $type) {
            MovementInventoryType::create($type);
        }
    }
}
