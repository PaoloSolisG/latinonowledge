<?php
namespace App\Controllers\Front;

use CodeIgniter\Controller;

class Team extends Controller
{
    public function index()
    {
        return view('front/team');
    }
}
