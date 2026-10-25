<?php

use App\Models\Feature;
use App\Models\OrderStep;

test('landing page loads successfully with features and order steps', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('BY.JANVA');
    $response->assertSee('PETA ADMINISTRASI');
    $response->assertSee('KEUNGGULAN LAYANAN KAMI');
    $response->assertSee('ALUR PEMESANAN');
    $response->assertSee('AKURAT');
    $response->assertSee('KONSULTASI');
});

test('landing page displays active features from database', function () {
    Feature::create([
        'icon' => 'star',
        'icon_color' => 'orange',
        'title' => 'FEATURE TEST KHUSUS',
        'description' => 'Deskripsi feature test khusus untuk verifikasi database.',
        'sort_order' => 99,
        'is_active' => true,
    ]);

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('FEATURE TEST KHUSUS');
    $response->assertSee('Deskripsi feature test khusus untuk verifikasi database.');

    Feature::where('title', 'FEATURE TEST KHUSUS')->delete();
});

test('landing page displays active order steps from database', function () {
    OrderStep::create([
        'icon' => 'check',
        'icon_color' => 'green',
        'step_number' => 99,
        'title' => 'LANGKAH TEST KHUSUS',
        'description' => 'Deskripsi langkah test khusus.',
        'sort_order' => 99,
        'is_active' => true,
    ]);

    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('LANGKAH TEST KHUSUS');
    $response->assertSee('Deskripsi langkah test khusus.');

    OrderStep::where('title', 'LANGKAH TEST KHUSUS')->delete();
});
