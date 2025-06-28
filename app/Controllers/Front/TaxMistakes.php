<?php
namespace App\Controllers\Front;

use App\Controllers\BaseController;

class TaxMistakes extends BaseController
{
    public function index()
    {
        return view('front/articles/common-tax-filing-mistakes');
    }
}
