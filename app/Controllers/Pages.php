<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home',
            'nama' => ['Hans', 'Yola']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'judul' => 'About'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'judul' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Punten',
                    'kota' => 'Malang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Bendungan',
                    'kota' => 'Malang'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
