<?php
namespace App\Controllers\Front;
use App\Controllers\BaseController;

class Slider extends BaseController
{
    public function index()
    {
        return view('front/slider');
    }
}
