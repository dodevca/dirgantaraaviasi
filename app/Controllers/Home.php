<?php
namespace App\Controllers;

use App\Models\ProfileModel;

class Home extends BaseController
{
    protected $page, $profile;

    public function __construct()
    {
        $this->profile  = new \App\Models\ProfileModel();
        $this->page     = [
            'title'         => 'Training Staff Penerbangan',
            'description'   => 'Bekerja sama secara langsung dengan salah satu Ground Handling Maskapai terbesar di Indonesia dalam hal penyaluran kerja dan magang kerja.'
        ];
    }

    public function index()
    {
        $data = [
            'name'          => 'home',
            'title'         => $this->page['title'],
            'description'   => $this->page['description'],
            'profile'       => $this->profile->profile(),
            'contents'      => []
        ];

        return view('homepage' , $data);
    }

    public function foreword()
    {
        $data = [
            'name'          => 'foreword',
            'title'         => 'Kata Pengantar',
            'description'   => $this->page['description'],
            'profile'       => $this->profile->profile(),
            'breadcrumb'    => [
                ['Kata Pengantar', '/kata-pengantar']
            ],
            'contents'      => []
        ];

        return view('foreword' , $data);
    }

    public function about()
    {
        $data = [
            'name'          => 'about',
            'title'         => 'Tentang Kami',
            'description'   => $this->page['description'],
            'profile'       => $this->profile->profile(),
            'breadcrumb'    => [
                ['Tentang Kami', '/tentang']
            ],
            'contents'      => []
        ];

        return view('about' , $data);
    }
    
    public function vision()
    {
        $data = [
            'name'          => 'vision',
            'title'         => 'Tentang Kami',
            'description'   => $this->page['description'],
            'profile'       => $this->profile->profile(),
            'breadcrumb'    => [
                ['Visi & Misi', '/visi-misi']
            ],
            'contents'      => []
        ];

        return view('vision' , $data);
    }
}