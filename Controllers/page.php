<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title'   => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title'   => 'Halaman Contact',
            'content' => 'Ini adalah halaman kontak yang dapat Anda hubungi.'
        ]);
    }

    public function faqs()
    {
        return "Ini halaman FAQ";
    }

    public function tos()
    {
        return "Ini halaman Term of Services";
    }

    public function login()
    {
        return "Ini halaman login";
    }

}