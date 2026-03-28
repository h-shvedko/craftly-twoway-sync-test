<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about(): \Illuminate\View\View
    {
        return view('pages.about');
    }
}
