<?php

namespace App\Http\Controllers;

class WorkshopController extends Controller
{
    public function index()
    {
        $events = [
            [
                'nama' => 'Frontend Fundamentals',
                'kategori' => 'web',
                'tanggal' => '27 September 2026',
                'waktu' => '09.00 - 12.00 WIB',
                'tempat' => 'Lab Komputer TEI',
                'deskripsi' => 'Belajar HTML, CSS, dan JavaScript dari dasar sampai membuat halaman web sederhana.',
                'icon' => '💻'
            ],

            [
                'nama' => 'UI/UX Starter Class',
                'kategori' => 'design',
                'tanggal' => '4 Oktober 2026',
                'waktu' => '09.00 - 12.30 WIB',
                'tempat' => 'Creative Space TEI',
                'deskripsi' => 'Belajar dasar UI/UX, pemilihan warna, typography, wireframe, dan prototype.',
                'icon' => '🎀'
            ],

            [
                'nama' => 'Python for Beginner',
                'kategori' => 'programming',
                'tanggal' => '11 Oktober 2026',
                'waktu' => '09.00 - 12.00 WIB',
                'tempat' => 'Lab Pemrograman',
                'deskripsi' => 'Belajar dasar Python seperti variable, percabangan, perulangan, dan function.',
                'icon' => '🐍'
            ],

            [
                'nama' => 'Database & SQL',
                'kategori' => 'database',
                'tanggal' => '18 Oktober 2026',
                'waktu' => '13.00 - 16.00 WIB',
                'tempat' => 'Lab Basis Data',
                'deskripsi' => 'Belajar database, tabel, relasi, dan query SQL dasar.',
                'icon' => '🗃️'
            ],

            [
                'nama' => 'Git & GitHub Workshop',
                'kategori' => 'tools',
                'tanggal' => '25 Oktober 2026',
                'waktu' => '09.00 - 11.30 WIB',
                'tempat' => 'Coworking TEI',
                'deskripsi' => 'Belajar Git dan GitHub untuk menyimpan dan mengelola project.',
                'icon' => '🌷'
            ],

            [
                'nama' => 'Cyber Security 101',
                'kategori' => 'security',
                'tanggal' => '1 November 2026',
                'waktu' => '09.00 - 12.00 WIB',
                'tempat' => 'Lab Jaringan',
                'deskripsi' => 'Mengenal keamanan digital, password, phishing, dan keamanan akun.',
                'icon' => '🔐'
            ],

            [
                'nama' => 'Laravel Lovely Starter',
                'kategori' => 'laravel',
                'tanggal' => '8 November 2026',
                'waktu' => '09.00 - 13.00 WIB',
                'tempat' => 'Lab Pemrograman Web',
                'deskripsi' => 'Belajar Laravel menggunakan konsep Routes, Controller, dan View.',
                'icon' => '🌸'
            ],

            [
                'nama' => 'Data Visualization',
                'kategori' => 'data',
                'tanggal' => '15 November 2026',
                'waktu' => '09.00 - 12.00 WIB',
                'tempat' => 'Data Lab TEI',
                'deskripsi' => 'Belajar mengubah data menjadi grafik dan informasi yang mudah dipahami.',
                'icon' => '📊'
            ],
        ];

        return view('event', compact('events'));
    }
}