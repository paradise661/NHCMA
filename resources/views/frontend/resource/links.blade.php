@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <main>
        <section class="team">
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4 class="headings-4 text-white m-0">Important Links</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Important Links</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container">
                @if ($links->isNotEmpty())
                    <div class="row mt-3">
                        <table class="table table-bordered table-striped table-design m-0">
                            <thead>
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col" style="width: 75%;">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($links as $key => $link)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $link->title ?? '' }}</td>
                                        <td><a class="btn btn-primary" href="{{ $link->link ?? '' }}"
                                                target="_blank">Visit</a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="card-body shadow-sm py-3 mt-4">
                        <h6 class="text-center">Data Not Found </h6>
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection
