<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Database\Seeders\Concerns\SeedsSampleImages;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    use SeedsSampleImages;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::factory()->create([
            'name' => 'Kirana Wedding & Event Organizer',
            'logo' => $this->copySampleImage('company-profiles/logos'),
            'description' => "Kirana Wedding & Event Organizer adalah penyelenggara acara profesional yang berfokus mewujudkan pernikahan dan acara impian Anda, mulai dari pernikahan adat maupun modern, gathering perusahaan, hingga ulang tahun dan acara keluarga.\n\nDidukung oleh tim yang berpengalaman menangani ratusan acara, kami berkomitmen memberikan pelayanan terbaik mulai dari konsep, perencanaan, hingga pelaksanaan hari H, sehingga Anda bisa menikmati momen spesial tanpa khawatir.",
            'address' => "Jl. Mawar Indah No. 12\nBandung, Jawa Barat 40123",
            'phone' => '(022) 555-0177',
            'email' => 'halo@kiranaevent.id',
            'facebook_url' => 'https://facebook.com/kiranaevent',
            'instagram_url' => 'https://instagram.com/kiranaevent',
            'x_url' => 'https://x.com/kiranaevent',
            'whatsapp_number' => '6281234567890',
            'operating_hours' => 'Senin - Sabtu, 09.00 - 18.00 WIB',
        ]);
    }
}
