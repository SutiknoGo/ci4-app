<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | CI 4'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | CI 4'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us | CI 4',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. ASD',
                    'kota' => 'SBY'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. QWE',
                    'kota' => 'JKT'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }




    //--------------------------------------------------------------------

}
