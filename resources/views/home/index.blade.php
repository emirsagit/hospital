@extends('layouts.app')

@section('content')
<main>
    <div
      class="relative pt-16 pb-32 flex content-center items-center justify-center"
      style="min-height: 75vh;"
    >
      <div
        class="absolute top-0 w-full h-full bg-center bg-cover bg-image"
      >
        <span
          id="blackOverlay"
          class="w-full h-full absolute opacity-75 bg-gray-900"
        ></span>
      </div>

      @include('home.partials.title')

      @include('layouts.shared.hrwhite')
    </div>
    <section class="pb-32 bg-gray-300 -mt-24">
      <div class="container mx-auto px-4">
        @include('home.partials.services')
        @include('home.partials.about')
      </div>
    </section>
    <section class="relative">
      @include('home.partials.whyUs')
    </section>
  </main>
@endsection