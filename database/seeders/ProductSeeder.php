<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'code' => 'BEL001',
                'name_spanish' => 'Set de Maquillaje Profesional',
                'name_english' => 'Professional Makeup Set',
                'description_spanish' => 'Set de maquillaje profesional con paleta de sombras, labiales, y brochas de alta calidad.',
                'description_english' => 'Professional makeup set with eyeshadow palette, lipsticks, and high-quality brushes.',
                'barcode' => '1234567890',
                'category_id' => 1,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'MOD001',
                'name_spanish' => 'Vestido de Noche Elegante',
                'name_english' => 'Elegant Evening Dress',
                'description_spanish' => 'Vestido de noche elegante con detalles de encaje y corte moderno.',
                'description_english' => 'Elegant evening dress with lace details and modern cut.',
                'barcode' => '0987654321',
                'category_id' => 2,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'BEB001',
                'name_spanish' => 'Set de Ropa para Bebé',
                'name_english' => 'Baby Clothing Set',
                'description_spanish' => 'Set de ropa para bebé con body, pantalón y gorro de algodón suave y cómodo.',
                'description_english' => 'Baby clothing set with onesie, pants, and hat made of soft and comfortable cotton.',
                'barcode' => '5678901234',
                'category_id' => 3,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'TEC001',
                'name_spanish' => 'Smartwatch con Monitor de Actividad',
                'name_english' => 'Smartwatch with Activity Monitor',
                'description_spanish' => 'Smartwatch con monitor de actividad, pulsómetro y notificaciones inteligentes.',
                'description_english' => 'Smartwatch with activity monitor, heart rate monitor, and smart notifications.',
                'barcode' => '4321987650',
                'category_id' => 4,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'BEL002',
                'name_spanish' => 'Crema Hidratante Anti-Edad',
                'name_english' => 'Anti-Aging Moisturizer Cream',
                'description_spanish' => 'Crema hidratante anti-edad con colágeno y ácido hialurónico para una piel más firme y joven.',
                'description_english' => 'Anti-aging moisturizer cream with collagen and hyaluronic acid for firmer and younger-looking skin.',
                'barcode' => '6543210987',
                'category_id' => 1,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'MOD002',
                'name_spanish' => 'Zapatos de Cuero para Hombre',
                'name_english' => 'Men\'s Leather Shoes',
                'description_spanish' => 'Zapatos de cuero para hombre con diseño clásico y suela antideslizante.',
                'description_english' => 'Men\'s leather shoes with classic design and non-slip sole.',
                'barcode' => '0123456789',
                'category_id' => 2,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'BEB002',
                'name_spanish' => 'Juguete Educativo de Madera',
                'name_english' => 'Wooden Educational Toy',
                'description_spanish' => 'Juguete educativo de madera con formas y colores para estimular el aprendizaje temprano.',
                'description_english' => 'Wooden educational toy with shapes and colors to stimulate early learning.',
                'barcode' => '9876543210',
                'category_id' => 3,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'TEC002',
                'name_spanish' => 'Auriculares Inalámbricos Bluetooth',
                'name_english' => 'Bluetooth Wireless Earbuds',
                'description_spanish' => 'Auriculares inalámbricos Bluetooth con cancelación de ruido y estuche de carga portátil.',
                'description_english' => 'Bluetooth wireless earbuds with noise cancellation and portable charging case.',
                'barcode' => '1357924680',
                'category_id' => 4,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'BEL003',
                'name_spanish' => 'Perfume Floral para Mujer',
                'name_english' => 'Floral Perfume for Women',
                'description_spanish' => 'Perfume floral con notas de jazmín y rosas para una fragancia elegante y femenina.',
                'description_english' => 'Floral perfume with jasmine and rose notes for an elegant and feminine fragrance.',
                'barcode' => '2468013579',
                'category_id' => 1,
                'created_by' => 1,
                'updated_by' => null
            ],
            [
                'code' => 'MOD003',
                'name_spanish' => 'Bolso de Cuero Genuino',
                'name_english' => 'Genuine Leather Handbag',
                'description_spanish' => 'Bolso de cuero genuino con diseño moderno y compartimentos espaciosos.',
                'description_english' => 'Genuine leather handbag with modern design and spacious compartments.',
                'barcode' => '3690147258',
                'category_id' => 2,
                'created_by' => 1,
                'updated_by' => null
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
