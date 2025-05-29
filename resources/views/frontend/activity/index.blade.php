@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['news_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['news_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['news_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main>
        <section class="blog">
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4 class="headings-4 text-white m-0">Our Activities</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Activities</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row mt-4">
                    @if ($activities->isNotEmpty())
                        @foreach ($activities as $new)
                            <div class="col-md-4 col-sm-12 mb-4">
                                <div class="card-blog">
                                    <div class="media-wrapper">
                                        <img src="{{ asset('admin/images/' . $new->image) }}" alt="{{ $new->title ?? '' }}">
                                    </div>
                                    <div class="card-blog-text">
                                        <a href="{{ route('activity.show', $new->slug) }}">
                                            <h5 class="my-2 text-primary">{{ $new->title ?? '' }}</h5>
                                        </a>
                                        <p class="my-2 text-black clamp-2">
                                            {{ $new->short_description ?? '' }}
                                        </p>
                                        <a class="text-secondary" href="{{ route('activity.show', $new->slug) }}">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            {{ $activities->links() }}
                        @endforeach
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
