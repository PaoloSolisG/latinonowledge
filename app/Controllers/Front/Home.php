<?php
namespace App\Controllers\Front;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('front/home');
    }
}
