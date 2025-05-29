@extends('layouts.frontend.master')

@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection

@section('content')
    <main>
        <section class="gallery mt-5">
            <div class="container">
                <h1 class="text-primary headings-3 my-5">Gallery</h1>
                <div class="row">
                    @if ($galleries->isNotEmpty())
                        @foreach ($galleries as $key => $gallery)
                            <div class="{{ $key == 0 ? 'col-md-12' : 'col-md-4' }} col-sm-12 mb-5">
                                <div class="{{ $key == 0 ? 'main-img' : '' }}">
                                    <div class="media-wrapper">
                                        <a class="fancybox" data-fancybox="demo"
                                            href="{{ asset('admin/images/gallery/' . $gallery->image) }}">
                                            <img src="{{ asset('admin/images/gallery/' . $gallery->image) }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $galleries->links() }}
                    @else
                        <div class="card-body shadow-lg py-3">
                            <h6 class="text-center">Data Not Available </h6>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
