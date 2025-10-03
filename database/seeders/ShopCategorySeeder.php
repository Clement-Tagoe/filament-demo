<?php

namespace Database\Seeders;

use App\Models\Shop\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShopCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'slug' => 'electronics', 'description' => 'Gadgets and tech.', 'parent_id' => null],
            ['name' => 'Laptops', 'slug' => 'laptops', 'description' => 'Portable computing powerhouses.', 'parent_id' => 1],
            ['name' => 'Smartphones', 'slug' => 'smartphones', 'description' => 'Devices that fit in your pocket.', 'parent_id' => 1],
            ['name' => 'Tablets', 'slug' => 'tablets', 'description' => 'Versatile screens for on-the-go.', 'parent_id' => 1],
            ['name' => 'Accessories', 'slug' => 'accessories', 'description' => 'Essentials to complete your setup.', 'parent_id' => null],
            ['name' => 'Phone Cases', 'slug' => 'phone-cases', 'description' => 'Protect your device.', 'parent_id' => 5],
            ['name' => 'Audio', 'slug' => 'audio', 'description' => 'Sound systems and accessories.', 'parent_id' => null],
            ['name' => 'Headphones', 'slug' => 'headphones', 'description' => 'Immerse in sound.', 'parent_id' => 7],
            ['name' => 'Speakers', 'slug' => 'speakers', 'description' => 'Room-filling audio.', 'parent_id' => 7],
            ['name' => 'Wearables', 'slug' => 'wearables', 'description' => 'Tech you wear.', 'parent_id' => null],
            ['name' => 'Smartwatches', 'slug' => 'smartwatches', 'description' => 'Wearable tech companions.', 'parent_id' => 10],
            ['name' => 'Fitness Trackers', 'slug' => 'fitness-trackers', 'description' => 'Monitor your health metrics.', 'parent_id' => 10],
            ['name' => 'Desktops', 'slug' => 'desktops', 'description' => 'Stationary power for heavy tasks.', 'parent_id' => 1],
            ['name' => 'Monitors', 'slug' => 'monitors', 'description' => 'Crystal-clear displays.', 'parent_id' => 1],
            ['name' => 'Keyboards', 'slug' => 'keyboards', 'description' => 'Input devices for precision.', 'parent_id' => 5],
            ['name' => 'Mice', 'slug' => 'mice', 'description' => 'Point and click with ease.', 'parent_id' => 5],
            ['name' => 'Cameras', 'slug' => 'cameras', 'description' => 'Capture the moment.', 'parent_id' => null],
            ['name' => 'Drones', 'slug' => 'drones', 'description' => 'Fly high with tech.', 'parent_id' => null],
            ['name' => 'Sneakers', 'slug' => 'sneakers', 'description' => 'Comfortable kicks for any stride.', 'parent_id' => null],
            ['name' => 'Apparel', 'slug' => 'apparel', 'description' => 'Stylish everyday wear.', 'parent_id' => null],
            ['name' => 'Gaming PCs', 'slug' => 'gaming-pcs', 'description' => 'Built for epic battles.', 'parent_id' => 1],
            ['name' => 'VR Headsets', 'slug' => 'vr-headsets', 'description' => 'Enter virtual worlds.', 'parent_id' => 1],
            ['name' => 'Storage Drives', 'slug' => 'storage-drives', 'description' => 'Keep your data safe.', 'parent_id' => 5],
            ['name' => 'Networking', 'slug' => 'networking', 'description' => 'Connect everything seamlessly.', 'parent_id' => 1],
            ['name' => 'Printers', 'slug' => 'printers', 'description' => 'Print like a pro.', 'parent_id' => null],
            ['name' => 'Scanners', 'slug' => 'scanners', 'description' => 'Digitize your world.', 'parent_id' => null],
            ['name' => 'Projectors', 'slug' => 'projectors', 'description' => 'Big-screen experiences.', 'parent_id' => null],
            ['name' => 'Audio Cables', 'slug' => 'audio-cables', 'description' => 'Connect your sound system.', 'parent_id' => 7],
            ['name' => 'Laptop Bags', 'slug' => 'laptop-bags', 'description' => 'Carry with care.', 'parent_id' => 5],
            ['name' => 'Mouse Pads', 'slug' => 'mouse-pads', 'description' => 'Smooth gliding surfaces.', 'parent_id' => 5],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'description' => $category['description'],
                'parent_id' => $category['parent_id'],
            ]);
        }
    }
}
