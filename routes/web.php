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
            'photos' => [
                'images/bentuyuns1.png',
                'images/bentuyuns2.png',
                'images/bentuyuns3.png',
            ],
        ],
        'lumajang-bersahabat' => [
            'hash' => '#lmj2v2',
            'title' => 'Lumajang Bersahabat',
            'meta' => 'lumajang-bersahabat-android-v2 · Flutter',
            'desc' => 'Aplikasi sipil untuk warga Lumajang. Menyelesaikan masalah layout overflow dan menyiapkan proses signing untuk build rilis Android dari nol.',
            'tags' => ['Flutter', 'Dart', 'Android'],
            'diff' => ['add' => '+ resolved RenderFlex overflow', 'mod' => 'configured keystore & key.properties'],
            'content' => "Lumajang Eksotik adalah aplikasi mobile berbasis Android yang dikembangkan oleh Pemerintah Kabupaten Lumajang sebagai media layanan informasi terpadu bagi masyarakat dan wisatawan. Aplikasi ini mengintegrasikan berbagai fitur, seperti informasi destinasi wisata, layanan publik, berita terbaru, lokasi fasilitas umum, pelaporan masyarakat, data daerah, serta akses ke berbagai layanan pemerintah dalam satu aplikasi. Tujuannya adalah meningkatkan kemudahan akses informasi, kualitas pelayanan publik, dan promosi potensi Kabupaten Lumajang secara digital.\n\n### Peran Saya\n- Memperbaiki isu RenderFlex Overflow di berbagai ukuran layar\n- Setup rilis Android (Keystore, ProGuard, dll)\n- Optimalisasi load API",
            'photos' => [
                'images/lumajang-1.jpeg',
                'images/lumajang-2.jpeg',
                'images/lumajang-3.jpeg',
            ],
        ],
        'ecommerce' => [
            'hash' => '#ecomm1',
            'title' => 'Ecommerce Website',
            'meta' => 'ecommerce-website · React · in progress',
            'desc' => 'Proyek pribadi: toko online dengan React, dibangun untuk memperdalam arsitektur frontend modern di luar jam magang.',
            'tags' => ['React', 'JavaScript'],
            'diff' => ['mod' => '🚧 actively in development'],
            'content' => "Solikin Oksigen adalah website e-commerce yang dikembangkan untuk mendukung proses penjualan produk dan layanan oksigen secara digital. Website ini menyediakan katalog produk, informasi detail produk, pemesanan online, pengelolaan data pelanggan, serta fitur administrasi untuk memudahkan pengelolaan transaksi. Dengan tampilan yang responsif dan mudah digunakan, website ini bertujuan meningkatkan kemudahan akses layanan, memperluas jangkauan pemasaran, serta memberikan pengalaman berbelanja yang efisien bagi pelanggan.\n\nMasih dalam tahap pengembangan (WIP).",
        ],
        'undangan-digital' => [
            'hash' => '#wed1ng',
            'title' => 'Undangan Digital',
            'meta' => '2 klien · HTML/CSS/JS · GitHub Pages & Netlify',
            'desc' => 'Undangan pernikahan digital custom — termasuk tema dark-gold dengan animasi Canvas, hitung mundur, dan bagian hadiah.',
            'tags' => ['Canvas API', 'Vanilla JS', 'Deploy'],
            'diff' => ['mod' => '2 site launched'],
            'content' => "Landing Page Undangan Digital adalah website yang dikembangkan sebagai media penyampaian undangan secara online untuk berbagai acara, seperti pernikahan, ulang tahun, maupun acara resmi lainnya. Website ini menampilkan informasi acara, profil mempelai atau penyelenggara, galeri foto, jadwal acara, peta lokasi, buku tamu, konfirmasi kehadiran (RSVP), serta tautan ke media sosial atau kontak. Desain yang responsif memastikan pengalaman pengguna tetap optimal di perangkat desktop maupun mobile.",
            'photos' => [
                'images/undangan-digital-1.png',
                'images/undangan-digital-2.png',
            ],
        ],
        'cuaca-tani' => [
            'hash' => '#cuacatani',
            'title' => 'Cuaca Tani',
            'meta' => '2 klien · Flutter ',
            'desc' => 'Aplikasi Cuaca Tani adalah aplikasi mobile berbasis Flutter yang saya kembangkan untuk memprediksi curah hujan menggunakan metode LSTM berdasarkan data suhu, kelembapan, dan lama penyinaran matahari.',
            'tags' => ['Flutter', 'Flask', 'Deploy', 'Machine Learning'],
            'diff' => ['mod' => '🚧 actively in development'],
            'content' => "Cuaca Tani merupakan aplikasi prediksi curah hujan berbasis mobile yang dikembangkan sebagai implementasi metode Long Short-Term Memory (LSTM). Aplikasi ini menggunakan data cuaca historis dari BMKG untuk menghasilkan prediksi curah hujan yang dapat dimanfaatkan petani dalam merencanakan kegiatan seperti penanaman, irigasi, dan panen. Sistem dibangun menggunakan Flutter untuk aplikasi mobile, Flask sebagai REST API, dan model TensorFlow/Keras untuk proses prediksi.\n\n### Teknologi\n- Python (Flask, TensorFlow/Keras)\n- Flutter\n- Firebase Firestore",
            'photos' => [
                'images/cuaca-tani-1.jpeg',
                'images/cuaca-tani-2.jpeg',
                'images/cuaca-tani-3.jpeg',
            ],
        ],
    ];

    if (!array_key_exists($slug, $projects)) {
        abort(404);
    }

    return view('project-detail', ['project' => $projects[$slug]]);
})->name('project.detail');
