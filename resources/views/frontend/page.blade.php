@extends('layouts.frontend.master')

@section('seo')
    <title>{{ $page->seo_title ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $page->meta_keywords ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $page->meta_description ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main>
        <section class="mission mt-5">
            <div class="container">
                <h1 class="heading-4 text-grey-100">
                    {{-- {{ $page->title ?? '' }} --}}
                </h1>
                <div class="text-primary mt-4 d-flex">
                    <p class="me-3">share</p>
                    <div class="social mb-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank">
                            <i class='fa fa-facebook mx-2'></i>
                        </a>

                        <a href="https://twitter.com/intent/tweet?text={{ Request::url() }}" target="_blank">
                            <i class='fa fa-twitter mx-2'></i>
                        </a>

                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}" target="_blank">
                            <i class='fa fa-linkedin mx-2'></i>
                        </a>
                    </div>
                </div>

                @if ($page)
                    <div class="row">
                        @if ($page->image)
                            <div class="col-lg-12 col-sm-12 mb-5">
                                <div class="media-wrapper br-12">
                                    <img src="{{ asset('admin/images/' . $page->image) }}" alt="{{ $page->title ?? '' }}">
                                </div>
                            </div>
                        @endif

                        <div class="col-lg-12 col-sm-12">
                            <div class="sub-heading mb-5">
                                <h2 class="heading-5 mb-3">
                                    {{ $page->title ?? '' }}
                                </h2>
                                <div class="paragraph text-grey-300 " style="text-align: justify">
                                    {!! $page->description ?? '' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Request::segment(2) == 'become-a-member')
                    <a class="btn btn-secondary text-white br-0 py-2" href="{{ route('registration') }}"
                        target="_blank">REGISTER
                        NOW</a>
                @endif
            </div>
        </section>
    </main>
@endsection
