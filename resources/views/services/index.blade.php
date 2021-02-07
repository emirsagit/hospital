@extends('layouts.app')

@section('content')
<main class="min-h-screen mb-32">
    <div class="bg-gradient-to-b from-blue-800 to-blue-300 h-96 bg-contain bg-no-repeat">
        <span class="w-full h-full bg-contain bg-no-repeat flex flex-col"
            style="background-image: url('/img/steteskop.png')">
            <h1 class="text-4xl text-white font-extrabold m-auto">
                {{ __('Hizmetlerimiz') }}
            </h1>
        </span>
    </div>
    <div class="border-b text-sm text-gray-700 font-light lg:pl-32 ml-auto">
        <p class="px-4"><a href="{{ '/' . app()->getLocale() }}" class="hover:text-gray-900">{{ __('Anasayfa') }} /</a>
            {{ __('Hizmetlerimiz') }}</p>
    </div>
    <div class="lg:pt-16 pt-8 relative mb-32 lg:px-32 flex flex-row flex-wrap">
        @foreach($services as $service)
        <div class="lg:w-4/12 md:w-6/12 mb-2 md:mb-4 md:px-4 cursor-pointer hover:opacity-75    ">
            <a href="{{ route('services.show', $service) }}">
                <img src="{{ $service->image }}" alt="{{ $service->alt }}" width="1000" height="562.5" loading="lazy">
                <p class="text-white bg-blue-500 font-bold text-center">{{ $service->title }}</p>
            </a>
        </div>
        @endforeach
    </div>
</main>
@endsection