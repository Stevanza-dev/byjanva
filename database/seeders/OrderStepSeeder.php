<?php

namespace Database\Seeders;

use App\Models\OrderStep;
use Illuminate\Database\Seeder;

class OrderStepSeeder extends Seeder
{
    /**
     * Seed the order steps for the landing page.
     */
    public function run(): void
    {
        $steps = [
            [
                'icon' => 'chat-bubble-left',
                'icon_color' => 'orange',
                'step_number' => 1,
                'title' => 'KONSULTASI',
                'description' => 'Diskusi kebutuhan peta via WhatsApp',
                'sort_order' => 1,
            ],
            [
                'icon' => 'arrow-up-tray',
                'icon_color' => 'orange',
                'step_number' => 2,
                'title' => 'KIRIM DATA',
                'description' => 'Kirim data desa, batas, dan referensi',
                'sort_order' => 2,
            ],
            [
                'icon' => 'computer-desktop',
                'icon_color' => 'orange',
                'step_number' => 3,
                'title' => 'PROSES DIGITASI',
                'description' => 'Pembuatan peta digital oleh tim',
                'sort_order' => 3,
            ],
            [
                'icon' => 'pencil-square',
                'icon_color' => 'orange',
                'step_number' => 4,
                'title' => 'REVISI',
                'description' => 'Revisi hingga sesuai kebutuhan',
                'sort_order' => 4,
            ],
            [
                'icon' => 'check',
                'icon_color' => 'green',
                'step_number' => 5,
                'title' => 'SELESAI',
                'description' => 'File peta dikirim dalam format cetak',
                'sort_order' => 5,
            ],
        ];

        foreach ($steps as $step) {
            OrderStep::updateOrCreate(
                ['step_number' => $step['step_number']],
                $step,
            );
        }
    }
}
