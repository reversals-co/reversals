<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/storage/adminpanel/admins');
        Storage::makeDirectory('public/storage/website/blogs');

        \App\Models\Admin::factory(5)->create();
        \App\Models\BlogCategory::factory(5)->create();
        \App\Models\Blog::factory(15)->create();
        \App\Models\Service::factory(8)->create();
    }
}
