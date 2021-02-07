<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function show(Service $service, Request $request)
    {
        app()->setLocale($service->language);
        return view('services.show', compact('service'));
    }
}
