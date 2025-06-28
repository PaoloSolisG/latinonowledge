<?php
namespace App\Controllers\Front;

use CodeIgniter\Controller;

class Slider extends Controller
{
    public function index()
    {
        return view('front/slider');
    }
}
