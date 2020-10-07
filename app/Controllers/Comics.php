<?php

namespace App\Controllers;

use App\Models\ComicModel;

class Comics extends BaseController
{

    protected $comicModel;
    public function __construct()
    {
        $this->comicModel = new ComicModel();
    }


    public function index()
    {
        $comic = $this->comicModel->findAll();
        // dd($comic);

        $data = [
            'title' => 'Comics | CI 4',
            'comic' => $comic
        ];

        // cara konek ke db tanpa model //
        // $db = \Config\Database::connect();
        // $comic = $db->query("SELECT * FROM comic");
        // foreach ($comic->getResultArray() as $row) {
        //     d($row);
        // }

        // Cara konek ke db pakai model //
        // $comicModel = new \App\Models\ComicModel();
        // $comicModel = new ComicModel();


        return view('comics/index', $data);
    }


    //--------------------------------------------------------------------

}
