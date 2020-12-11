<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }
    public function pages($url)
    {
        switch ($url) {
            case 'about':
                return view('dashboard.about');
                break;
            case 'contact-us':
                return view('dashboard.contact');
                break;
            
            default:
                abort(403);
        }
        return view('dashboard.home');
    }
}
