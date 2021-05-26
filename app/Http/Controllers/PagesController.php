<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('components.index');
    }

    public function about()
    {
        return view('components.about', ['nama' => "jack"]);
    }
}
