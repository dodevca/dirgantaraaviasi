<?php
namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    public function profile()
    {
        $data = [
            'contacts' => [
                'phone'  => [
                    'data'  => '+62 822 2647 4354',
                    'url'   => 'https://api.whatsapp.com/send?phone=6282226474354'
                ],
                'email'  => [
                    'data'  => 'info@dirgantaraaviasi.com',
                    'url'   => 'mailto:info@dirgantaraaviasi.com'
                ]
            ],
            'socials' => [
                'instagram' => 'https://www.instagram.com/dirgantaraaviasi/',
                'facebook'  => '#',
                'twitter'   => '#'
            ]
        ];

        return $data;
    }
}