<?php

namespace Database\Seeders;

use App\Models\Service;
use Database\Seeders\Concerns\SeedsSampleImages;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    use SeedsSampleImages;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Paket Pernikahan Lengkap',
                'description' => 'Perencanaan dan pelaksanaan pernikahan dari konsep, dekorasi, hingga hari H, disesuaikan dengan adat dan tema yang Anda inginkan.',
                'price' => 'Mulai Rp 25.000.000',
            ],
            [
                'name' => 'Dekorasi & Venue',
                'description' => 'Dekorasi pelaminan dan tata ruang acara yang elegan, dengan pilihan tema dan lokasi venue sesuai kebutuhan.',
                'price' => 'Mulai Rp 10.000.000',
            ],
            [
                'name' => 'Dokumentasi Foto & Video',
                'description' => 'Abadikan setiap momen spesial dengan tim fotografer dan videografer profesional, termasuk foto prewedding.',
                'price' => 'Mulai Rp 5.000.000',
            ],
            [
                'name' => 'Catering & Konsumsi',
                'description' => 'Menu catering beragam dengan cita rasa lezat, disesuaikan dengan jumlah tamu dan preferensi acara Anda.',
                'price' => 'Mulai Rp 75.000/porsi',
            ],
            [
                'name' => 'MC & Hiburan',
                'description' => 'Pemandu acara berpengalaman serta pilihan hiburan live music atau entertainment untuk memeriahkan acara.',
                'price' => 'Hubungi Kami',
            ],
            [
                'name' => 'Gathering & Acara Korporat',
                'description' => 'Penyelenggaraan acara gathering, ulang tahun perusahaan, hingga seminar dengan konsep yang profesional dan berkesan.',
                'price' => 'Mulai Rp 15.000.000',
            ],
        ];

        foreach ($services as $index => $service) {
            Service::factory()->create([
                'name' => $service['name'],
                'image' => $this->copySampleImage('services'),
                'description' => $service['description'],
                'price' => $service['price'],
                'is_active' => true,
                'sort_order' => $index,
            ]);
        }
    }
}
