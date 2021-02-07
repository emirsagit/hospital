<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->path() === 'tr') {
            return redirect('/');
        }
        return view('home.index');
    }
    
    public function about()
    {
        dd('burada');
    } 
}
