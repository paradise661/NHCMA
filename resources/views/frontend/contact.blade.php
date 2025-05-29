@extends('layouts.frontend.master')

@section('seo')
    <title>{{ $settings['contact_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['contact_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['contact_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection

@section('content')
    <main>
        <section class="contact">
            <div class="container">
                <h1 class="heading-3 text-primary w-100 text-center">
                    {{-- Contact Us --}}
                </h1>
                <div class="row mt-4">
                    <div class="col-lg-12 col-sm-12">
                        <div class="media-wrapper">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1766.482956024111!2d85.32967281748682!3d27.687448426501412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c5d3e74d4d%3A0x71e8d4efe4072451!2sNepal%20Healthcare%20Manager&#39;s%20Association!5e0!3m2!1sen!2snp!4v1693891941498!5m2!1sen!2snp"
                                height="450" style="border:0;width:100%;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-5 col-sm-12  contact-info">
                        <h2 class="heading-4 text-secondary bold">
                            - Contact
                        </h2>
                        <p class="paragraph text-grey-100">
                            {{ $settings['contact_section_description'] ?? '' }}
                        </p>
                        <div class="contact-email paragraph d-flex">
                            <i class="fa-solid fa-envelope text-primary heading-5 pt-2"></i>
                            <p class=" text-grey-100 align-items-center px-3">
                                Send us an email <br> {{ $settings['site_email'] ?? 'N/A' }}
                                <br>
                                {{ $settings['alternate_email'] ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="contact-phone paragraph d-flex">
                            <i class="fa-solid fa-phone text-primary heading-5 pt-2"></i>
                            <p class=" text-grey-100 align-items-center px-3">
                                Give us a call <br> {{ $settings['site_contact'] ?? 'N/A' }}
                                <br>
                                {{ $settings['alternate_contact'] ?? 'N/A' }}
                            </p>
                        </div>

                        <div class="contact-address paragraph d-flex mb-5">
                            <i class="fa-solid fa-location-dot text-primary heading-5 pt-2"></i>
                            <p class=" text-grey-100 align-items-center px-3">Visit our office <br>
                                {{ $settings['site_location'] ?? 'N/A' }}
                                <br>
                                {{ $settings['alternate_location'] ?? 'N/A' }}

                            </p>
                        </div>
                        <div class="social mt-5">
                            <h3 class="heading-4 text-secondary">
                                Get Connected
                            </h3>
                            <div class="social text-primary mt-4 bold">
                                @php $socialmedias = getSocialmedia(); @endphp
                                @foreach ($socialmedias as $social)
                                    <a href="{{ $social->link ?? '' }}"><i class='{{ $social->icon ?? '' }} mx-2'></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 contact-form">
                        @include('admin.includes.message')
                        <form class="text-primary" action="{{ route('inquiry') }}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="name">Full Name</label>
                                <input class="form-control mt-2 @error('full_name') is-invalid @enderror" class="br-0"
                                    id="name" type="text" name="full_name" placeholder="">
                                @error('full_name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input class="form-control mt-2 @error('email') is-invalid @enderror" id="email"
                                    type="text" name="email" placeholder="">

                                @error('email')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="phone">Phone</label>
                                <input class="form-control mt-2 @error('phone') is-invalid @enderror" id="phone"
                                    type="text" name="phone" placeholder="">

                                @error('phone')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for="message">Message</label>
                                <textarea class="form-control mt-2 @error('message') is-invalid @enderror" id="floatingTextarea2"style="height: 200px"
                                    name="message" placeholder=""></textarea>
                                @error('message')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-secondary w-100 text-white py-2" type="submit">Inquiry</button>
                        </form>
                    </div>

                </div>

                <h3 class="heading-3 text-primary w-100 text-center my-5">
                    Frequently asked Questions
                </h3>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            @if ($faqs->isNotEmpty())
                                @foreach ($faqs as $key => $faq)
                                    <div class="accordion-item mb-3 br-0">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button {{ !$key == 0 ? 'collapsed' : '' }}"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne{{ $faq->id }}"
                                                type="button" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                {{ $faq->title ?? '' }} </button>
                                        </h2>
                                        <div class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                            id="panelsStayOpen-collapseOne{{ $faq->id }}"
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                {!! $faq->description ?? '' !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="media-wrapper">
                            @if ($settings['faq_image'])
                                <img src="{{ asset('admin/images/setting/' . $settings['faq_image']) }}" alt="faq">
                            @else
                                <img src="{{ asset('admin/images/faq.png') }}" alt="faq">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
