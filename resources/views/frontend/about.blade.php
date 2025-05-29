@extends('layouts.frontend.master')
@section('seo')
<title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
<meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
<meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
<main>
    @php $aboutpage = getPage('about-us'); @endphp
    @if ($aboutpage)
    <section class="mt-5 about-missions">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4">
                    <h2 class="text-primary">About<br><span class="text-secondary">&#8594</span>Us</h2>
                    <div class="text-grey-300 my-3 align-items-center paragraph">
                        {!! strlen($aboutpage->description) > 500
                        ? substr($aboutpage->description, 0, 500) . '...'
                        : $aboutpage->description !!}
                    </div>
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 mb-4 media-wrapper">
                    <img src="{{ asset('admin/images/' . $aboutpage->image) }}" alt="{{ $aboutpage->title ?? '' }}">
                    <a class="btn btn-secondary text-white br-8 px-3 py-2 position-absolute start-50 translate-middle" href="{{ route('page.show', 'about-us') }}" style="margin-top: 420px">LEARN
                        MORE &emsp; &#8594</a>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>
    @endif

    <section class="mt-5 about-desc">
        <div class="container">
            @php $ourvisionpage = getPage('our-vision'); @endphp

            @if ($ourvisionpage)
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4 media-wrapper">
                    <img class="float-end" src="{{ asset('admin/images/' . $ourvisionpage->image) }}" alt="{{ $$ourvisionpage->title ?? '' }}">

                    <a class="btn btn-secondary text-white br-8 px-4 py-3 position-absolute start-50 translate-middle" href="{{ route('page.show', 'our-vision') }}" style="margin-top: 420px;
                            margin-left: 40px;">LEARN
                        MORE &emsp; &#8594</a>
                </div>
                <div class="col-sm-12 col-md-6 mb-4">
                    <h2 class="text-primary">Our<br><span class="text-secondary">&#8594</span>Vision</h2>

                    <div class="text-grey-300 my-5 align-items-center paragraph text-justify">
                        {!! strlen($ourvisionpage->description) > 600
                        ? substr($ourvisionpage->description, 0, 600) . '...'
                        : $ourvisionpage->description !!}
                    </div>
                </div>
            </div>
            @endif

        </div>
    </section>

    <!-- Our Missions Section -->
    <section class="mt-5 about-missions">
        @php $ourmissionnpage = getPage('our-mission'); @endphp

        @if ($ourmissionnpage)
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4">

                    <h2 class="text-primary">Our<br><span class="text-secondary">&#8594</span>Missions</h2>
                    <div class="text-grey-100 my-3 align-items-center paragraph">
                        {{ strlen($ourmissionnpage->description) > 450 ? substr($ourmissionnpage->description, 0, 450) . '...' : $ourmissionnpage->description }}
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-4 media-wrapper">
                    <img src="{{ asset('admin/images/' . $ourmissionnpage->image) }}" alt="{{ $ourmissionnpage->title ?? '' }}">
                    <a class="btn btn-secondary text-white br-8 px-3 py-2 position-absolute start-50 translate-middle" href="{{ route('page.show', 'our-mission') }}" style="margin-top: 420px;">LEARN
                        MORE &emsp; &#8594</a>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
        @endif
    </section>

    @php $pmessage = getPage('message-from-president'); @endphp
    @if ($pmessage)
    <section class="about-messages mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 media-wrapper">
                    <h4 class="text-primary mb-3">{{ $pmessage->title ?? '' }}</h4>
                    <img src="{{ asset('admin/images/' . $pmessage->image) }}" alt="{{ $pmessage->title ?? '' }}">
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="text-grey-300 my-4 align-items-center paragraph">
                        {!! strlen($pmessage->description) > 475
                        ? substr($pmessage->description, 0, 475) . '...'
                        : $pmessage->description !!}
                    </div>
                    <a class="btn btn-secondary text-white" href="{{ route('page.show', 'message-from-president') }}">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Members Section -->

    <section class="mt-5 about-members">
        <div class="container">
            <h4 class="text-primary mb-4">
                Members
            </h4>
            <div class="row">
                @if ($memberinfos->isNotEmpty())
                @foreach ($memberinfos as $member)
                <div class="col-sm-12 col-md-6">
                    <div class="card-members">
                        <div class="media-wrapper">
                            <img src="{{ asset('admin/images') }}/{{ $member->image ?: 'avatar.png' }}" alt="{{ $member->title ?? '' }}">
                            <a href="{{ route('member.show', strtolower($member->type)) }}">
                                <p class="bg-white text-black p-2">{{ $member->title ?? '' }}</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p>No Data Found</p>
                @endif

            </div>
        </div>
    </section>

    <!-- Messages Section -->

    <!-- Team Section -->
    <section class="team mt-5 " id="team">
        <div class="container">
            <h2 class="heading-4 text-primary">-Team</h2>
            <div class="row mt-3">
                @if ($ourteams->isNotEmpty())
                @foreach ($ourteams as $team)
                <div class="col-md-6 col-sm-12 col-lg-4 card-team mb-4">
                    <div class="container wrap">
                        <div class="media-wrapper card-team-image">
                            <img src="{{ asset('admin/images/' . $team->image) }}" alt="" />
                        </div>
                        <h3 class="heading-4 mt-4">{{ $team->name ?? '' }}</h3>
                        <p class="heading-4 mt-3 text-secondary">
                            {{ $team->position ?? '' }}
                        </p>
                    </div>
                </div>
                @endforeach
                @else
                <p>No Data Found</p>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection