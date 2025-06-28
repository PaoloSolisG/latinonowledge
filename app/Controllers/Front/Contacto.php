<?php
namespace App\Controllers\Front;
use App\Controllers\BaseController;

class Contacto extends BaseController
{
    public function index()
    {
        return view('front/contacto');
    }
}
