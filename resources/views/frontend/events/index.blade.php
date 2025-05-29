@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['events_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['events_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['events_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <!-- Main Content -->
    <main>
        <section class="events mt-5">
            <div class="container">
                <h1 class="text-primary headings-3 my-5">Events</h1>
                <div class="row">
                    @if ($events->isNotEmpty())
                        @foreach ($events as $event)
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="media-wrapper">

                                    <img src="{{ asset('admin/images/' . $event->image) }}" alt="">
                                    <p class="bg-white text-black p-2">{{ date('M j, Y', strtotime($event->date)) ?? '' }}
                                    </p>
                                </div>
                                {{-- <p class="my-2">{{ $event->name ?? '' }}
                            </p> --}}
                                <a class="text-decoration-none" href="{{ route('events.show', $event->slug) }}">
                                    <h5 class="my-2 text-black-100">{{ $event->name ?? '' }}</h5>
                                </a>
                                <p class="my-1 location"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    {{ $event->location ?? '' }}</p>
                            </div>
                        @endforeach
                        {{ $events->links() }}
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
