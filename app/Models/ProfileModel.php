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
                    'data'  => '[your_number]',
                    'url'   => 'https://api.whatsapp.com/send?phone=[your_number]'
                ],
                'email'  => [
                    'data'  => 'info@example.com',
                    'url'   => 'mailto:info@example.com'
                ]
            ],
            'socials' => [
                'instagram' => 'https://www.instagram.com/example/',
                'facebook'  => '#',
                'twitter'   => '#'
            ]
        ];

        return $data;
    }
}