<?php
namespace App\Controllers\Front;
use App\Controllers\BaseController;

class Servicios extends BaseController
{
    public function index()
    {
        return view('front/servicios');
    }
}
