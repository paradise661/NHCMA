@extends('layouts.frontend.master')
@section('seo')
<title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
<meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
<meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
<main>
    <section class="team">
        <livewire:lifetimemember />
    </section>
</main>
@endsection