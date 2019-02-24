<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $fillname = "Champ";
        $website = "Boomgt";
        return view('about',[
            'fillname' => $fillname,
            'website' => $website
        ]);
    }
}
