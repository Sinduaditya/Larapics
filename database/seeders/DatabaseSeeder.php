<?php

namespace Database\Seeders;

use App\Models\Image;
use Database\Factories\ImageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $images = Storage::allFiles('images');
        foreach ($images as $image) {
            if(strpos($image, ".DS_Store")) continue;

            Image::factory(6)->create([
                'file' => $image,

            ]);
        }
    }
}
