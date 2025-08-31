<?php

namespace App\Controllers;

class PhpController extends \CodeIgniter\Controller
{
    public function berurutan()
    {
        return view('PHP/sintaks_php/instruksi_berurutan');
    }

    public function pemilihan()
    {
        return view('PHP/sintaks_php/instruksi_pemilihan');
    }

    public function pengulangan()
    {
        return view('PHP/sintaks_php/instruksi_pengulangan');
    }

    public function tabelHtml()
    {
        return view('PHP/HTML_PHP/tabel_html');
    }

    public function tabelLooping()
    {
        return view('PHP/HTML_PHP/tabel_looping');
    }
}
