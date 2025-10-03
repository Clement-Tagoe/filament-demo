<?php

namespace Database\Seeders;

use App\Models\Shop\Brand;
use Illuminate\Support\Str;
use App\Models\Shop\Product;
use App\Models\Shop\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShopProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'MacBook Pro 14"',
                'slug' => 'macbook-pro-14',
                'sku' => 'MBP14-M2-2023',
                'barcode' => '123456789012',
                'description' => 'Sleek power for creators. M2 chip, Retina display.',
                'qty' => 25,
                'security_stock' => 5,
                'old_price' => 2199.00,
                'price' => 1999.00,
                'cost' => 1500.00,
                'shop_brand_id' => 1,
                'category_ids' => [1, 2, 5],
            ],
            [
                'name' => 'iPhone 15 Pro',
                'slug' => 'iphone-15-pro',
                'sku' => 'IPH15-PRO-2023',
                'barcode' => '123456789013',
                'description' => 'Titanium build, A17 Pro chip. Pro cameras.',
                'qty' => 150,
                'security_stock' => 20,
                'old_price' => 1099.00,
                'price' => 999.00,
                'cost' => 750.00,
                'shop_brand_id' => 1,
                'category_ids' => [1, 3, 6],
            ],
            [
                'name' => 'Galaxy S24 Ultra',
                'slug' => 'galaxy-s24-ultra',
                'sku' => 'GS24-ULTRA-2024',
                'barcode' => '123456789014',
                'description' => 'S Pen included, 200MP camera. AI features.',
                'qty' => 100,
                'security_stock' => 15,
                'old_price' => 1399.00,
                'price' => 1299.00,
                'cost' => 950.00,
                'shop_brand_id' => 2,
                'category_ids' => [1, 3, 5, 6],
            ],
            [
                'name' => 'XPS 13 Laptop',
                'slug' => 'xps-13-laptop',
                'sku' => 'XPS13-2023',
                'barcode' => '123456789015',
                'description' => 'InfinityEdge display, carbon fiber chassis.',
                'qty' => 40,
                'security_stock' => 10,
                'old_price' => 1199.00,
                'price' => 1099.00,
                'cost' => 800.00,
                'shop_brand_id' => 4,
                'category_ids' => [1, 2, 5],
            ],
            [
                'name' => 'WH-1000XM5 Headphones',
                'slug' => 'wh-1000xm5-headphones',
                'sku' => 'WH1000XM5-2022',
                'barcode' => '123456789016',
                'description' => 'Noise-cancelling mastery, 30hr battery.',
                'qty' => 80,
                'security_stock' => 10,
                'old_price' => 429.00,
                'price' => 399.00,
                'cost' => 250.00,
                'shop_brand_id' => 3,
                'category_ids' => [7, 8, 5],
            ],
            [
                'name' => 'ThinkPad X1 Carbon',
                'slug' => 'thinkpad-x1-carbon',
                'sku' => 'TPX1C-2023',
                'barcode' => '123456789017',
                'description' => 'Ultra-light business laptop, MIL-SPEC tested.',
                'qty' => 30,
                'security_stock' => 5,
                'old_price' => 1499.00,
                'price' => 1399.00,
                'cost' => 1000.00,
                'shop_brand_id' => 6,
                'category_ids' => [1, 2, 29],
            ],
            [
                'name' => 'ROG Strix Scar 18',
                'slug' => 'rog-strix-scar-18',
                'sku' => 'ROG-SCAR18-2023',
                'barcode' => '123456789018',
                'description' => 'RTX 4090 GPU, 18" QHD+ 240Hz display.',
                'qty' => 15,
                'security_stock' => 3,
                'old_price' => 3199.00,
                'price' => 2999.00,
                'cost' => 2200.00,
                'shop_brand_id' => 7,
                'category_ids' => [1, 21, 5],
            ],
            [
                'name' => 'AirPods Pro 2nd Gen',
                'slug' => 'airpods-pro-2nd-gen',
                'sku' => 'AIRPODS-PRO2-2022',
                'barcode' => '123456789019',
                'description' => 'Adaptive transparency, spatial audio.',
                'qty' => 200,
                'security_stock' => 25,
                'old_price' => 279.00,
                'price' => 249.00,
                'cost' => 150.00,
                'shop_brand_id' => 1,
                'category_ids' => [7, 8, 5, 6],
            ],
            [
                'name' => 'Surface Laptop 5',
                'slug' => 'surface-laptop-5',
                'sku' => 'SURFACE-L5-2022',
                'barcode' => '123456789020',
                'description' => 'PixelSense touchscreen, Alcantara palm rest.',
                'qty' => 60,
                'security_stock' => 10,
                'old_price' => 1099.00,
                'price' => 999.00,
                'cost' => 700.00,
                'shop_brand_id' => 9,
                'category_ids' => [1, 2, 4, 5],
            ],
            [
                'name' => 'Pixel 8 Pro',
                'slug' => 'pixel-8-pro',
                'sku' => 'PIXEL8-PRO-2023',
                'barcode' => '123456789021',
                'description' => 'Tensor G3, Magic Editor AI photo tools.',
                'qty' => 120,
                'security_stock' => 15,
                'old_price' => 999.00,
                'price' => 899.00,
                'cost' => 650.00,
                'shop_brand_id' => 10,
                'category_ids' => [1, 3, 11],
            ],
            [
                'name' => 'QuietComfort Earbuds',
                'slug' => 'quietcomfort-earbuds',
                'sku' => 'QC-EARBUDS-2022',
                'barcode' => '123456789022',
                'description' => 'Bose noise cancellation in compact form.',
                'qty' => 90,
                'security_stock' => 10,
                'old_price' => 199.00,
                'price' => 179.00,
                'cost' => 100.00,
                'shop_brand_id' => 11,
                'category_ids' => [7, 8],
            ],
            [
                'name' => 'DeathAdder V3 Mouse',
                'slug' => 'deathadder-v3-mouse',
                'sku' => 'DEATHADDER-V3-2023',
                'barcode' => '123456789023',
                'description' => 'Ergonomic gaming mouse, 30K DPI.',
                'qty' => 150,
                'security_stock' => 20,
                'old_price' => 79.00,
                'price' => 69.00,
                'cost' => 40.00,
                'shop_brand_id' => 14,
                'category_ids' => [5, 16, 22],
            ],
            [
                'name' => 'Air Zoom Pegasus',
                'slug' => 'air-zoom-pegasus',
                'sku' => 'ZOOM-PEGASUS-2023',
                'barcode' => '123456789024',
                'description' => 'Responsive cushioning for runners.',
                'qty' => 200,
                'security_stock' => 25,
                'old_price' => 149.00,
                'price' => 129.00,
                'cost' => 80.00,
                'shop_brand_id' => 15,
                'category_ids' => [19, 20],
            ],
            [
                'name' => 'Charge 6',
                'slug' => 'charge-6',
                'sku' => 'CHARGE6-2023',
                'barcode' => '123456789025',
                'description' => 'Advanced fitness tracking, 7-day battery.',
                'qty' => 100,
                'security_stock' => 15,
                'old_price' => 179.00,
                'price' => 159.00,
                'cost' => 90.00,
                'shop_brand_id' => 13,
                'category_ids' => [10, 12, 5],
            ],
            [
                'name' => 'EOS R5',
                'slug' => 'eos-r5',
                'sku' => 'EOS-R5-2020',
                'barcode' => '123456789026',
                'description' => '45MP full-frame, 8K video.',
                'qty' => 10,
                'security_stock' => 2,
                'old_price' => 4099.00,
                'price' => 3899.00,
                'cost' => 3000.00,
                'shop_brand_id' => 17,
                'category_ids' => [17, 5],
            ],
            [
                'name' => 'Mini 4 Pro',
                'slug' => 'mini-4-pro',
                'sku' => 'MINI4-PRO-2023',
                'barcode' => '123456789027',
                'description' => 'Lightweight drone, 4K HDR video.',
                'qty' => 30,
                'security_stock' => 5,
                'old_price' => 799.00,
                'price' => 759.00,
                'cost' => 500.00,
                'shop_brand_id' => 20,
                'category_ids' => [18, 5],
            ],
            [
                'name' => 'MX Master 3S',
                'slug' => 'mx-master-3s',
                'sku' => 'MX-MASTER3S-2022',
                'barcode' => '123456789028',
                'description' => 'Precision mouse for productivity.',
                'qty' => 120,
                'security_stock' => 15,
                'old_price' => 109.00,
                'price' => 99.00,
                'cost' => 60.00,
                'shop_brand_id' => 13,
                'category_ids' => [5, 16, 30],
            ],
            [
                'name' => 'PowerCore 26800',
                'slug' => 'powercore-26800',
                'sku' => 'POWERCORE-26800-2022',
                'barcode' => '123456789029',
                'description' => 'High-capacity portable charger.',
                'qty' => 200,
                'security_stock' => 25,
                'old_price' => 69.00,
                'price' => 59.00,
                'cost' => 30.00,
                'shop_brand_id' => 13,
                'category_ids' => [5, 29],
            ],
        ];

        // Create remaining products programmatically
        $faker = \Faker\Factory::create();
        $brands = Brand::all();
        $categories = Category::all();
        for ($i = 19; $i <= 50; $i++) {
            $name = $faker->words(3, true);
            $products[] = [
                'name' => $name,
                'slug' => Str::slug($name),
                'sku' => strtoupper('SKU-' . $faker->unique()->regexify('[A-Z0-9]{8}')),
                'barcode' => $faker->unique()->ean13,
                'description' => $faker->sentence(10),
                'qty' => $faker->numberBetween(5, 300),
                'security_stock' => $faker->numberBetween(2, 50),
                'old_price' => $faker->randomFloat(2, 50, 4200),
                'price' => $faker->randomFloat(2, 49, 3999),
                'cost' => $faker->randomFloat(2, 30, 3000),
                'shop_brand_id' => $brands->random()->id,
                'category_ids' => $categories->random($faker->numberBetween(3, 6))->pluck('id')->toArray(),
            ];
        }

        foreach ($products as $product) {
            $categoryIds = $product['category_ids'];
            unset($product['category_ids']);
            // Ensure old_price is greater than price if set
            if (isset($product['old_price']) && isset($product['price'])) {
                $product['old_price'] = $product['old_price'] > $product['price'] ? $product['old_price'] : $product['price'] + 100;
            }
            $newProduct = Product::create($product);
            $newProduct->categories()->attach($categoryIds);
        }
    }
}
