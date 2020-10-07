<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Contr Coba";
    }

    public function about($nama = "")
    {
        echo "Nama $nama";
    }
    //--------------------------------------------------------------------

}
