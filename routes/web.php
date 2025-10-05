<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Artikel
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'kesetaraan-gender',
                'title' => 'Kesetaraan Gender',
                'author' => ' Budi Rusdi',
                'populer' => false,
                'image' => asset('assets/artikel11.png'),
                'body' => '1 dari 3 perempuan alami kekerasan berbasis gender → lebih dari 736 juta perempuan terdampak di seluruh dunia.'
            ],
            [
                'id' => 2,
                'slug' => 'minim-kepemimpinan',
                'title' => 'Minim Kepemimpinan',
                'author' => 'Sherline',
                'populer' => false,
                'image' => asset('assets/artikel12.png'),
                'body' => 'Hanya 25% posisi pemimpin global diisi perempuan, meski tingkat pendidikan terus meningkat.'
            ],
            [
                'id' => 3,
                'slug' => 'putus-sekolah',
                'title' => 'Putus Sekolah',
                'author' => 'Amanda',
                'populer' => false,
                'image' => asset('assets/artikel13.png'),
                'body' => 'Anak perempuan 2x lebih berisiko putus sekolah, dipengaruhi faktor ekonomi & perkawinan dini.'
            ],
            [
                'id' => 4,
                'slug' => 'dampak-ekonomi-dari-kesetaraan-gender',
                'title' => 'Dampak Ekonomi dari Kesetaraan Gender',
                'author' => 'Budi Santoso',
                'populer' => false,
                'image' => asset('assets/artikel14.png'),
                'body' => 'Menjelaskan bagaimana partisipasi perempuan di dunia kerja dapat meningkatkan ekonomi suatu negara.'
            ],
            [
                'id' => 5,
                'slug' => 'politik-setara:-menelisik-peran-perempuan-di-parlemen',
                'title' => 'Politik Setara: Menelisik Peran Perempuan di Parlemen',
                'author' => 'Budi Santoso',
                'populer' => false,
                'image' => asset('assets/artikel15.png'),
                'body' => 'Mengulas representasi dan kontribusi perempuan dalam dunia politik dan pemerintahan.'
            ],
            [
                'id' => 6,
                'slug' => 'pendidikan-kunci: mengapa-sekolah-inklusif-penting',
                'title' => 'Pendidikan Kunci: Mengapa Sekolah Inklusif Penting',
                'author' => 'Siti Aminah',
                'populer' => false,
                'image' => asset('assets/artikel16.png'),
                'body' => 'Menjelaskan pentingnya pendidikan yang adil untuk membentuk generasi yang lebih toleran.'
            ],
            [
                'id' => 7,
                'slug' => 'kisah-perempuan-mengubah-industri-yang-didominasi-pria',
                'title' => 'Kisah Perempuan Mengubah Industri yang Didominasi Pria',
                'author' => 'Siti Aminah',
                'populer' => true,
                'image' => asset('assets/artikel17.png'),
                'body' => 'Mengangkat kisah inspiratif perempuan yang sukses mendobrak batasan di bidang-bidang yang didominasi oleh pria.'
            ],
        ];
    }
}
Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda']);
});

Route::get('/artikels', function () {
    $artikels = Artikel::all();
    $nonPopulerArtikels = array_filter($artikels, fn($item) => $item['populer'] === false);
    $populerArtikels = array_filter($artikels, fn($item) => $item['populer'] === true);
    return view('artikels', ['title' => 'Artikel', 'nonPopulerArtikels' => $nonPopulerArtikels, 'populerArtikels' => $populerArtikels]);
});

Route::get('/artikel/{slug}', function ($slug) {
    $artikels = Artikel::all();
    $artikel = Arr::first($artikels, function ($artikel) use ($slug) {
        return $artikel['slug'] == $slug;
    });

    // dd($artikel);
    if (!$artikel) abort(404);

    return view('artikel', ['title' => 'Detail Artikel', 'artikel' => $artikel]);
});

Route::get('/pelatihan', function () {
    return view('pelatihan', ['title' => 'Pelatihan']);
});

Route::get('/donasi', function () {
    return view('donasi', ['title' => 'Donasi']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Kontak']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'login']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'register']);
});
