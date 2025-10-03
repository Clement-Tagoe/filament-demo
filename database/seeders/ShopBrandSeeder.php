<?php

namespace Database\Seeders;

use App\Models\Shop\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShopBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple', 'slug' => 'apple', 'website' => 'https://www.apple.com', 'description' => 'Innovative consumer electronics from Cupertino.'],
            ['name' => 'Samsung', 'slug' => 'samsung', 'website' => 'https://www.samsung.com', 'description' => 'Leading global electronics manufacturer.'],
            ['name' => 'Sony', 'slug' => 'sony', 'website' => 'https://www.sony.com', 'description' => 'Entertainment and tech giant.'],
            ['name' => 'Dell', 'slug' => 'dell', 'website' => 'https://www.dell.com', 'description' => 'Reliable computing solutions for all.'],
            ['name' => 'HP', 'slug' => 'hp', 'website' => 'https://www.hp.com', 'description' => 'Personal systems and printing experts.'],
            ['name' => 'Lenovo', 'slug' => 'lenovo', 'website' => 'https://www.lenovo.com', 'description' => 'Think tanks for modern productivity.'],
            ['name' => 'Asus', 'slug' => 'asus', 'website' => 'https://www.asus.com', 'description' => 'Gaming and professional hardware.'],
            ['name' => 'Acer', 'slug' => 'acer', 'website' => 'https://www.acer.com', 'description' => 'Affordable tech for everyday use.'],
            ['name' => 'Microsoft', 'slug' => 'microsoft', 'website' => 'https://www.microsoft.com', 'description' => 'Software and hardware ecosystem leader.'],
            ['name' => 'Google', 'slug' => 'google', 'website' => 'https://store.google.com', 'description' => 'Pixel-perfect devices and services.'],
            ['name' => 'Bose', 'slug' => 'bose', 'website' => 'https://www.bose.com', 'description' => 'Premium audio experiences.'],
            ['name' => 'JBL', 'slug' => 'jbl', 'website' => 'https://www.jbl.com', 'description' => 'Powerful sound for any adventure.'],
            ['name' => 'Logitech', 'slug' => 'logitech', 'website' => 'https://www.logitech.com', 'description' => 'Human-centered engineering for creators.'],
            ['name' => 'Razer', 'slug' => 'razer', 'website' => 'https://www.razer.com', 'description' => 'For gamers, by gamers.'],
            ['name' => 'Nike', 'slug' => 'nike', 'website' => 'https://www.nike.com', 'description' => 'Just do it – athletic wear and gear.'],
            ['name' => 'Adidas', 'slug' => 'adidas', 'website' => 'https://www.adidas.com', 'description' => 'The three stripes of sport.'],
            ['name' => 'Canon', 'slug' => 'canon', 'website' => 'https://www.canon.com', 'description' => 'Imaging and optical excellence.'],
            ['name' => 'Nikon', 'slug' => 'nikon', 'website' => 'https://www.nikon.com', 'description' => 'Legendary cameras for storytellers.'],
            ['name' => 'GoPro', 'slug' => 'gopro', 'website' => 'https://gopro.com', 'description' => 'Be a hero with action cams.'],
            ['name' => 'DJI', 'slug' => 'dji', 'website' => 'https://www.dji.com', 'description' => 'Aerial innovation for creators.'],
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand['name'],
                'slug' => $brand['slug'],
                'website' => $brand['website'],
                'description' => $brand['description'],
            ]);
        }
    }
}
