<?php
namespace App\Controllers\Front;

use CodeIgniter\Controller;

class About extends Controller
{
    public function index()
    {
        return view('front/about');
    }
}
