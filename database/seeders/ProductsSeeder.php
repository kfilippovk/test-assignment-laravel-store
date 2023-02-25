<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::upsert(
            [
                [
                    'name' => 'Велосипед',
                    'barcode' => '1234567890123',
                    'price' => 10000,
                ],
                [
                    'name' => 'Самокат',
                    'barcode' => '1234567890124',
                    'price' => 5000,
                ],
                [
                    'name' => 'Ролики',
                    'barcode' => '1234567890125',
                    'price' => 4000,
                ],
            ],
            ['barcode']
        );
    }
}
