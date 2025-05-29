@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main class="flex-grow-1">
        @foreach ($popups as $popup)
            <div class="modal fade" id="popupModal{{ $popup->id }}" tabindex="-1" aria-labelledby="popupModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-headerpopup">
                            <button class="btn-close red-close-btn" data-bs-dismiss="modal" type="button"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center" style="cursor: pointer;">
                            @if ($popup->image)
                                <img class="img-fluid" src="{{ asset($popup->image) }}" alt="Popup Image"
                                    style="object-fit: contain;">
                            @endif
                        </div>

                        {{-- Modal footer with centered button --}}
                        <div class="modal-footer justify-content-center">
                            <a class="btn btn-primary" href="{{ $popup->link }}" target="_blank">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var myModal = new bootstrap.Modal(document.getElementById('popupModal{{ $popup->id }}'));
                    myModal.show();
                });
            </script>
        @endforeach

        <!-- Slider Section -->
        <section class="home-carousel">
            <div class="carousel slide" id="carouselExampleCaptions" data-bs-ride="carousel">
                <swiper-container class="mySwiper" pagination="false" navigation="true" loop="true" autoplay-delay="4000"
                    auto-disable-on-interaction="false">
                    @foreach ($sliders as $key => $slider)
                        <swiper-slide>
                            <div class="card-carousel">
                                <div class="img-wide">
                                    <img src="{{ asset('admin/images/' . $slider->image) }}" alt="image" />
                                    <div class="container">
                                        @if ($slider->title)
                                            <div class="title bg-primary-400 text-white px-4 py-2">
                                                <h3 class="p-0 m-0"> {{ $slider->title ?? '' }}</h3>
                                            </div>
                                        @endif

                                        <div class="btn-group btn-group-lg d-none d-md-block d-lg-block">
                                            <a class="btn btn-primary" href="{{ route('mediacoverages') }}">Media
                                                Coverages</a>
                                            <a class="btn btn-primary" href="{{ route('activities') }}">Activities</a>
                                            <a class="btn btn-primary" href="{{ route('blogs') }}">Blogs</a>
                                            <a class="btn btn-primary" href="{{ route('eventsregister') }}">Event
                                                Registration</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                    @endforeach
                </swiper-container>
            </div>
        </section>

        @php $page = getPage('about-us'); @endphp
        @if ($page)
            <!-- About Section -->
            <section class="mt-4 home-about">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-5 mb-4">
                            <h4 class="text-primary">{{ $page->title ?? '' }}</h4>

                            <div class="text-justify paragraph">
                                {!! strlen($page->description) > 613 ? substr($page->description, 0, 613) . '...' : $page->description !!}
                            </div>

                            <a class="btn btn-secondary justify-content-around br-0 px-4 text-white"
                                href="{{ route('page.show', 'about-us') }}">Learn More &#8594 </a>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="img-landscape">
                                <img class="br-12" src="{{ asset('admin/images/' . $page->image) }}" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @php $pmessage = getPage('message-from-president'); @endphp
        @if ($pmessage)
            <section class="about-messages mt-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 ">
                            <h4 class="text-primary mb-3">{{ $pmessage->title ?? '' }}</h4>
                            <div class="img-portrait">

                                <img src="{{ asset('admin/images/' . $pmessage->image) }}"
                                    alt="{{ $pmessage->title ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 mt-3">
                            <div class="text-grey-300 my-4 align-items-center paragraph text-justify">
                                {!! strlen($pmessage->description) > 1100
                                    ? substr($pmessage->description, 0, 1100) . '...'
                                    : $pmessage->description !!}
                            </div>

                            <div>
                                <a class="btn btn-secondary text-white br-0 px-4"
                                    href="{{ route('page.show', 'message-from-president') }}">Learn More &#8594</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Events Section -->
        @if ($upcoming_events->isNotEmpty())
            <section class="home-events mt-5" id="upcoming_events">
                <div class="container">
                    <h4 class="text-primary mb-3">Upcoming Events</h4>
                    <div class="row">
                        @foreach ($upcoming_events as $event)
                            <div class="col-md-6 col-sm-12  mb-4">
                                <img src="{{ asset('admin/images/' . $event->image) }}" alt="">
                                <div class="img-portrait">

                                    <p class="bg-white text-black p-2">{{ date('M j, Y', strtotime($event->date)) ?? '' }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <a class="btn btn-secondary justify-content-around br-0 px-4 text-white"
                            href="{{ route('events') }}">&#8594
                            View All</a>
                    </div>
                </div>
            </section>
        @endif

        <!-- Medias Section -->
        <section class="home-media mt-5" id="highlight">
            <div class="container">
                <h4 class="text-primary mb-4">
                    Media Coverages
                </h4>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        @if ($media_coverages->isNotEmpty())
                            @foreach ($media_coverages as $coverage)
                                <div class="card-media d-flex align-items-center mb-2">
                                    <a class="title flex-fill h5 text-black" href="{{ $coverage->link ?? '' }}"
                                        target="_blank">{{ $coverage->title ?? '' }}</a>
                                    <a class="bg-secondary text-white date"
                                        href="{{ $coverage->link ?? '' }}">{{ date('M j', strtotime($coverage->date)) ?? '' }}
                                    </a>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="img-portrait">

                            @if ($settings['media_coverage_image'])
                                <img src="{{ asset('admin/images/setting/' . $settings['media_coverage_image']) }}"
                                    alt="media coverage">
                            @else
                                <img src="{{ asset('admin/images/media_coverage.jpeg') }}" alt="media coverage">
                            @endif
                        </div>

                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn btn-secondary justify-content-around br-0 px-4 text-white"
                        href="{{ route('mediacoverages') }}">
                        View All &#8594</a>
                </div>
            </div>
        </section>

        @if ($executive_member)
            <section class="about-messages mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 ">
                            <h4 class="text-primary mb-3">Our Teams</h4>
                            <div class="img-landscape">
                                <img src="{{ asset('admin/images/' . $executive_member->image) }}"
                                    alt="{{ $executive_member->title ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 mt-3">
                            <div class="text-grey-300 my-4 align-items-center paragraph text-justify">
                                {!! strlen($executive_member->description) > 890
                                    ? substr($executive_member->description, 0, 890) . '...'
                                    : $executive_member->description !!}
                            </div>

                            <div>
                                <a class="btn btn-secondary text-white br-0 px-4" href="{{ route('ourteams') }}">View All
                                    &#8594</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Blog and Updates Section -->
        <section class="home-blog mt-5" id="blogs">
            <div class="container">
                <h4 class="text-primary mb-4">
                    Blog and Updates
                </h4>
                <div class="row row-gap-3">
                    @if ($blogs->isNotEmpty())
                        @foreach ($blogs as $blog)
                            <div class="col-md-4 col-sm-12 d-grid align-self-stretch">
                                <div class="card-blog">
                                    <div class="media-wrapper">
                                        <img src="{{ asset('admin/images/' . $blog->image) }}"
                                            alt="{{ $blog->title ?? '' }}">
                                    </div>
                                    <div class="card-blog-text">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">
                                            <h5 class="my-2 text-primary">{{ $blog->title ?? '' }}</h5>
                                        </a>
                                        <div class="my-2 text-black clamp-3 paragraph">
                                            {{ $blog->short_description ?? '' }}
                                        </div>
                                        <a class="text-secondary" href="{{ route('blogs.show', $blog->slug) }}">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="w-100 d-flex justify-content-center mt-3">
                    <a class="btn btn-secondary justify-content-around br-0 px-4 text-white" href="{{ route('blogs') }}">
                        View All &#8594</a>
                </div>
            </div>
        </section>
    @endsection
