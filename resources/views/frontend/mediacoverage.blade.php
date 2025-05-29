@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main>
        <section class="home-media">
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4 class="headings-4 text-white m-0">Media Coverage</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media Coverage</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row mt-4">
                    <div class="col-md-12 col-sm-12">
                        @if ($mediacoverages->isNotEmpty())
                            @foreach ($mediacoverages as $coverage)
                                <div class="card-media d-flex align-items-center mb-2">
                                    <a class="title flex-fill h5 text-black" href="{{ $coverage->link ?? '' }}"
                                        target="_blank">{{ $coverage->title ?? '' }}</a>
                                    <a class="bg-secondary text-white date"
                                        href="{{ $coverage->link ?? '' }}">{{ date('M j', strtotime($coverage->date)) ?? '' }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="card-body shadow-lg py-3">
                                <h6 class="text-center">Data Not Available </h6>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
