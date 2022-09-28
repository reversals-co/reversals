<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/adminpanel/images/admins');
        Storage::makeDirectory('public/website/images/blogs');

        \App\Models\Admin::factory(5)->create();
        \App\Models\BlogCategory::factory(5)->create();
        \App\Models\Blog::factory(25)->create();

        $services = [
            'Web Development',
            'Content Writing',
            'Graphic Designing',
            'Social Media Management',
            'UI/UX Designing',
        ];

        foreach ($services as $key => $service) {
            Service::create([
                'name' => $service,
                'slug' => Str::slug($service),
                'summary' => 'this is ' . $service . ' summary.',
                'description' => 'this is ' . $service . ' description.',
                'admin_id' => 1,
            ]);
        }

        // \App\Models\Service::factory(8)->create();
    }
}
