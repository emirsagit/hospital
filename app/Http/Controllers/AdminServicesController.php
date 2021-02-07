<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\ServicesAdminFormRequest;

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

    public function store(ServicesAdminFormRequest $request)
    {
        if ($request->file('image')) {
            $image       = $request->file('image');
            $filename    = $image->getClientOriginalName();
            Image::make($image)->resize(1000, 562.5)->save(public_path('/storage/services/' . $filename));
        }
        $filenameForSaving = $request->file('image') ? '/storage/services/' . $filename : '';

        Service::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'video' => $request->video,
            'alt' => $request->alt,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'language' => $request->language,
            'seo_description' => $request->seo_description,
            'seo_title' => $request->seo_title,
            'image' => $filenameForSaving,
        ]);

        return view('admin.services.index')->with('success', 'Hizmet Kaydedildi');
    }
}
