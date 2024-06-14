<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Form extends BaseController
{
    protected $page, $profile;

    public function __construct()
    {
        $this->profile  = new \App\Models\ProfileModel();
        $this->page     = [
            'title'         => 'Formulir Pendaftaran',
            'description'   => 'Bekerja sama secara langsung dengan salah satu Ground Handling Maskapai terbesar di Indonesia dalam hal penyaluran kerja dan magang kerja.'
        ];
    }

    public function index()
    {
        // $data = [
        //     'name'          => 'form',
        //     'title'         => $this->page['title'],
        //     'description'   => $this->page['description'],
        //     'profile'       => $this->profile->profile(),
        //     'breadcrumb'    => [
        //         ['Formulir Pendaftaran', '/daftar']
        //     ],
        //     'contents'      => []
        // ];

        // return view('form' , $data);
        return redirect()->to('[google_form]');
    }
}