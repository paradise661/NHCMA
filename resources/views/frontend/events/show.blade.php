@extends('layouts.frontend.master')

@section('seo')
    <title>{{ $eventdetails->seo_title ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $eventdetails->meta_keywords ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $eventdetails->meta_description ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main>
        <section class="news mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <p class="paragraph bold text-grey-100">
                            {{-- {{ $newsdetails->title ?? '' }} --}}
                        </p>
                        <h2 class="heading-5">
                            {{ $eventdetails->name ?? '' }}
                        </h2>
                        <div class="text-primary mt-4 d-flex">
                            <p class="me-3">share</p>
                            <div class="social">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank">
                                    <i class='fa fa-facebook mx-2'></i>
                                </a>

                                <a href="https://twitter.com/intent/tweet?text={{ Request::url() }}" target="_blank">
                                    <i class='fa fa-twitter mx-2'></i>
                                </a>

                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}"
                                    target="_blank">
                                    <i class='fa fa-linkedin mx-2'></i>
                                </a>
                            </div>
                        </div>
                        <div class="media-wrapper pe-5 w-100 ">
                            <img class="br-12" src="{{ asset('admin/images/' . $eventdetails->image) }}" alt="">
                        </div>
                        <div class="sub-heading my-5">
                            <h6 class="heading-5">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{ $eventdetails->location ?? '' }}
                            </h6>
                            <p class="paragraph text-grey-100">
                                {!! $eventdetails->description !!}
                            </p>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="sidebar mb-5">

                            <ul class="navbar-nav">
                                <li class="title text-white bg-primary br-4 ps-4">More Events</li>
                                @foreach ($moreevents as $event)
                                    <a class="text-decoration-none" href="{{ route('events.show', $event->slug) }}">
                                        <li class="content p-4">{{ $event->name ?? '' }}</li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
