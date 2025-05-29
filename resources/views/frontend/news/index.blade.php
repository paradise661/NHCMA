@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['news_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['news_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['news_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main>
        <section class="blog">
            <div class="container">
                <h1 class="text-primary headings-3 my-5">News</h1>
                <div class="row">
                    @if (!$news->isEmpty())
                        @foreach ($news as $new)
                            <div class="col-md-4 col-sm-12 mb-4">
                                <div class="card-blog">
                                    <div class="media-wrapper">
                                        <img src="{{ asset('admin/images/' . $new->image) }}" alt="">
                                    </div>
                                    <div class="card-blog-text">

                                        <a href="{{ route('news.show', $new->slug) }}">
                                            <h5 class="my-2 text-grey-100">{{ $new->title ?? '' }}</h5>
                                        </a>
                                        <p class="my-2 text-grey-100">
                                            {{ substr(strip_tags($new->short_description), 0, 125) }}..</p>
                                        <a class="text-secondary" href="{{ route('news.show', $new->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            {{ $news->links() }}
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
