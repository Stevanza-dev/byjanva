<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Seed the features for the landing page.
     */
    public function run(): void
    {
        $features = [
            [
                'icon' => 'map',
                'icon_color' => 'orange',
                'title' => 'AKURAT',
                'description' => 'Data spasial presisi tinggi dengan referensi koordinat yang tervalidasi dan sumber peta resmi BIG.',
                'sort_order' => 1,
            ],
            [
                'icon' => 'clock',
                'icon_color' => 'red',
                'title' => 'PENGERJAAN CEPAT',
                'description' => 'Estimasi pengerjaan 3–7 hari kerja tergantung kompleksitas. Cepat tanpa mengorbankan kualitas.',
                'sort_order' => 2,
            ],
            [
                'icon' => 'shield-check',
                'icon_color' => 'yellow',
                'title' => 'SESUAI STANDAR',
                'description' => 'Mengikuti standar kartografi nasional dan kaidah pemetaan yang berlaku. Layak cetak format besar.',
                'sort_order' => 3,
            ],
            [
                'icon' => 'camera',
                'icon_color' => 'green',
                'title' => 'FOTO LOKASI IN-SITU',
                'description' => 'Dokumentasi lapangan langsung di lokasi untuk data yang lebih kontekstual dan akurat.',
                'sort_order' => 4,
            ],
        ];

        foreach ($features as $feature) {
            Feature::updateOrCreate(
                ['title' => $feature['title']],
                $feature,
            );
        }
    }
}
