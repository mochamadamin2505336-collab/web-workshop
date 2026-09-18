<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    public function index()
    {
        $events = [
            [
                'nama' => 'Seminar Teknologi 2026',
                'tanggal' => '20 September 2026',
                'tempat' => 'Aula Fakultas Teknik UM',
                'deskripsi' => 'Seminar mengenai perkembangan teknologi dan dunia digital.'
            ],

            [
                'nama' => 'Workshop Web Development',
                'tanggal' => '25 September 2026',
                'tempat' => 'Laboratorium Komputer',
                'deskripsi' => 'Workshop untuk mempelajari dasar-dasar pengembangan website.'
            ],

            [
                'nama' => 'Lomba Kreativitas Mahasiswa',
                'tanggal' => '30 September 2026',
                'tempat' => 'Gedung Graha Cakrawala',
                'deskripsi' => 'Kompetisi untuk mengembangkan kreativitas dan inovasi mahasiswa.'
            ]
        ];

        return view('event', compact('events'));
    }
}