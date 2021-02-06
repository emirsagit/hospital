<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function index()
    {
        return view('admin.services.index');
    } 

    public function create()
    {
        return view('admin.services.create');
    } 
}
