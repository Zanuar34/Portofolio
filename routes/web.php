<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ]);

    return redirect()->back()
        ->with('success', 'Terima kasih, pesan Anda berhasil dikirim!');
})->name('contact.submit');

Route::get('/project/{slug}', function ($slug) {
    $projects = [
        'bentuyuns' => [
            'hash' => '#b3n7uy',
            'title' => 'Bentuyuns — Platform Jual Beli Properti',
            'meta' => 'bentuyuns-mmm · bentuyuns-pt · Laravel',
            'desc' => 'Platform multi-situs untuk transaksi properti dengan alur pembayaran KPR dan CASH. Menangani autentikasi manager, status transaksi, dan approval klien di sisi backend.',
            'tags' => ['Laravel', 'MySQL', 'REST API'],
            'diff' => ['add' => '+ fixed 401 unauthorized (param order)', 'mod' => 'added transaction status enum via migration'],
            'content' => "Bentuyuns merupakan platform digital yang dikembangkan untuk mendukung pengelolaan proses bisnis di bidang properti, mulai dari pemasaran, pemesanan, hingga administrasi dan pengelolaan dokumen pelanggan. Sistem ini menyediakan berbagai fitur seperti pengajuan KPR, pengelolaan dokumen PJB (Perjanjian Jual Beli), BAST (Berita Acara Serah Terima), SHGB, SPP, serta monitoring status transaksi. Platform ini bertujuan meningkatkan efisiensi operasional perusahaan melalui digitalisasi proses bisnis sehingga layanan kepada pelanggan menjadi lebih cepat, terintegrasi, dan terdokumentasi dengan baik.",
            
        ],
        'lumajang-bersahabat' => [
            'hash' => '#lmj2v2',
            'title' => 'Lumajang Bersahabat',
            'meta' => 'lumajang-bersahabat-android-v2 · Flutter',
            'desc' => 'Aplikasi sipil untuk warga Lumajang. Menyelesaikan masalah layout overflow dan menyiapkan proses signing untuk build rilis Android dari nol.',
            'tags' => ['Flutter', 'Dart', 'Android'],
            'diff' => ['add' => '+ resolved RenderFlex overflow', 'mod' => 'configured keystore & key.properties'],
            'content' => "Lumajang Bersahabat adalah aplikasi pelaporan dan layanan sipil masyarakat.\n\n### Peran Saya\n- Memperbaiki isu RenderFlex Overflow di berbagai ukuran layar\n- Setup rilis Android (Keystore, ProGuard, dll)\n- Optimalisasi load API",
        ],
        'ecommerce' => [
            'hash' => '#ecomm1',
            'title' => 'Ecommerce Website',
            'meta' => 'ecommerce-website · React · in progress',
            'desc' => 'Proyek pribadi: toko online dengan React, dibangun untuk memperdalam arsitektur frontend modern di luar jam magang.',
            'tags' => ['React', 'JavaScript'],
            'diff' => ['mod' => '🚧 actively in development'],
            'content' => "Proyek ini adalah platform ecommerce mandiri. Fokus pada modern state management (Redux/Zustand) dan integrasi payment gateway sandbox.\n\nMasih dalam tahap pengembangan (WIP).",
        ],
        'undangan-digital' => [
            'hash' => '#wed1ng',
            'title' => 'Undangan Digital',
            'meta' => '2 klien · HTML/CSS/JS · GitHub Pages & Netlify',
            'desc' => 'Undangan pernikahan digital custom — termasuk tema dark-gold dengan animasi Canvas, hitung mundur, dan bagian hadiah.',
            'tags' => ['Canvas API', 'Vanilla JS', 'Deploy'],
            'diff' => ['mod' => '2 site launched'],
            'content' => "Membangun dua buah situs undangan pernikahan. Menggunakan Canvas API untuk efek falling leaves/snow, dan memutar audio latar belakang dengan fallback untuk autoplay policy browser.",
        ],
        'cuaca-tani' => [
            'hash' => '#cuacatani',
            'title' => 'Cuaca Tani',
            'meta' => '2 klien · Flutter · GitHub Pages & Netlify',
            'desc' => 'Aplikasi Cuaca Tani adalah aplikasi mobile berbasis Flutter yang saya kembangkan untuk memprediksi curah hujan menggunakan metode LSTM berdasarkan data suhu, kelembapan, dan lama penyinaran matahari.',
            'tags' => ['Flutter', 'Flask', 'Deploy'],
            'diff' => ['mod' => '2 site launched'],
            'content' => "Proyek IoT & Machine Learning untuk memprediksi curah hujan. Menggunakan model LSTM yang di-serve via Flask API, dan dikonsumsi oleh aplikasi Flutter.\n\n### Teknologi\n- Python (Flask, TensorFlow/Keras)\n- Flutter\n- Firebase Firestore",
        ],
    ];

    if (!array_key_exists($slug, $projects)) {
        abort(404);
    }

    return view('project-detail', ['project' => $projects[$slug]]);
})->name('project.detail');
