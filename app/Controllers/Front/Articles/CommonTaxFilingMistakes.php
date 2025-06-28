<?php
namespace App\Controllers\Front\Articles;

use App\Controllers\BaseController;

class CommonTaxFilingMistakes extends BaseController
{
    public function index()
    {
        return view('front/articles/common-tax-filing-mistakes');
    }
}
