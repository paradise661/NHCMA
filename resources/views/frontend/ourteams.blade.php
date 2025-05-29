@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main>
        <!-- Team Section -->
        <section class="team" id="team">
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4 class="headings-4 text-white m-0">Executive Members</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Executive Memebers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4 justify-content-center">
                    @if ($ourteams->isNotEmpty())
                        @foreach ($ourteams as $key => $team)
                            @if ($key == 0)
                                <div class="col-md-12">
                                    <div class="row justify-content-center">

                                        <div class="col-md-3 col-sm-12 card-team mb-4 d-grid align-self-stretch">
                                            <div class="container wrap">
                                                <div class="media-wrapper card-team-image">
                                                    <img src="{{ asset('admin/images/' . $team->image) }}"
                                                        alt="{{ $team->name ?? '' }}" />
                                                </div>
                                                <p class="h5 mt-4 fw-normal text-center">{{ $team->name ?? '' }}</p>
                                                <h6 class="bg-primary text-white mt-3 px-2 py-1 br-4 fw-normal mb-0">
                                                    {{ $team->position ?? '' }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-6 col-sm-12 col-lg-3 card-team mb-4 d-grid align-self-stretch">
                                    <div class="container wrap">
                                        <div class="media-wrapper card-team-image">
                                            <img src="{{ asset('admin/images/' . $team->image) }}"
                                                alt="{{ $team->name ?? '' }}" />
                                        </div>
                                        <p class="h5 mt-4 fw-normal text-center">{{ $team->name ?? '' }}</p>
                                        <h6 class="bg-primary text-white mt-3 px-2 py-1 br-4 fw-normal mb-0">
                                            {{ $team->position ?? '' }}
                                        </h6>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
