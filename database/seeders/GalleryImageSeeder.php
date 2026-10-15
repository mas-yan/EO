<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Database\Seeders\Concerns\SeedsSampleImages;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    use SeedsSampleImages;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $captions = [
            'Momen Sakral Pernikahan',
            'Dekorasi Pelaminan Elegan',
            'Keseruan Acara Gathering Perusahaan',
            'Tim Kami Mempersiapkan Acara',
            'Resepsi Pernikahan Outdoor',
        ];

        foreach ($captions as $index => $caption) {
            GalleryImage::factory()->create([
                'image' => $this->copySampleImage('gallery'),
                'caption' => $caption,
                'is_active' => true,
                'sort_order' => $index,
            ]);
        }
    }
}
