<?php

namespace Database\Seeders;

use App\Models\Tax;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taxes = [
            [
                'value' => 5,
                'created_by' => 1
            ],
            [
                'value' => 10,
                'created_by' => 1
            ],
            [
                'value' => 16,
                'created_by' => 1
            ],
            [
                'value' => 20,
                'created_by' => 1
            ]
        ];

        foreach ($taxes as  $tax) {
           Tax::create($tax);
        }

    }
}
