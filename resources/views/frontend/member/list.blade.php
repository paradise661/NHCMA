@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <section class="home-members mt-5">
        <div class="container">
            <h4 class="text-primary mb-4">
                Members
            </h4>
            <div class="row">
                @if ($memberinfos->isNotEmpty())
                    @foreach ($memberinfos as $member)
                        <div class="col-sm-12 col-md-6">
                            <div class="card-members-info">
                                <div class="media-wrapper">
                                    <img src="{{ asset('admin/images/' . $member->image) }}" alt="">
                                    <a href="{{ route('member.show', strtolower($member->type)) }}">
                                        <p class="bg-white text-black p-2">{{ $member->title ?? '' }}</p>
                                    </a>
                                </div>
                                <div class="my-3">
                                    <a class="text-decoration-none text-black"
                                        href="{{ route('member.show', strtolower($member->type)) }}">
                                        <h6>{{ $member->title ?? '' }}</h6>
                                    </a>
                                    {!! $member->description ?? '' !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="card-body shadow-lg py-3">
                        <h6 class="text-center">Data Not Available </h6>
                    </div>
                @endif
            </div>
        </div>

    </section>
@endsection
