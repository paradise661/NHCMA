<section class="home-footer mt-5">
    <div class="footer py-3 bg-primary">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-logo">
                        <div class="img-wrapper bg-white w-100 ps-3">

                            <img src="{{ $settings['site_footer_logo'] ? asset('admin/images/setting/' . $settings['site_footer_logo']) : asset('frontend/assets/images/logo2.png') }}"
                                alt="logo" width="290px" height="60px">
                        </div>

                        <p class="text-grey-200 footer-info mt-2" style="text-align: justify !important">
                            {{ $settings['site_information'] ?? '' }}
                        </p>
                    </div>

                    <div class="social text-white mt-4">
                        @foreach ($socialmedias as $social)
                            <a href="{{ $social->link ?? '' }}"> <i
                                    class='{{ $social->icon ?? '' }} mx-2 text-white'></i></a>
                        @endforeach
                    </div>

                    @if ($settings['affilated_image'])
                        <div class="affilated">
                            <h5 class="text-white py-2">Current Affilated</h5>
                            <img src="{{ asset('admin/images/setting/' . $settings['affilated_image']) }}"
                                alt="logo">
                        </div>
                    @endif
                </div>

                <div class="col-md-2 col-sm-6 col-6">
                    <div class="text-white">
                        <h5 class="mt-4">Company</h5>
                        <div class="list mt-4 text-grey-200">
                            <a class="list-group-item mb-3" href="{{ route('home') }}">Home</a>
                            <a class="list-group-item mb-3" href="{{ route('ourteams') }}">Executive Members</a>
                            <a class="list-group-item mb-3" href="{{ route('page.show', 'become-a-member') }}">Become a
                                Member</a>
                            <a class="list-group-item mb-3" href="{{ route('page.show', 'our-vision') }}">Our
                                Vision</a>
                            <a class="list-group-item mb-3" href="{{ route('page.show', 'our-mission') }}">Our
                                Mission</a>
                            <a class="list-group-item mb-3"
                                href="{{ route('page.show', 'message-from-president') }}">Message From
                                President</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-6">
                    <div class="text-white">
                        <h5 class="mt-4">Pages</h5>
                        <div class="list mt-4 text-grey-200">
                            <a class="list-group-item mb-3" href="{{ route('events') }}">Events</a>
                            <a class="list-group-item mb-3" href="{{ route('blogs') }}">Blogs</a>
                            <a class="list-group-item mb-3" href="{{ route('gallery') }}">Gallery</a>
                            <a class="list-group-item mb-3"
                                href="{{ route('page.show', 'terms-and-conditions') }}">Terms &
                                Conditions</a>
                            <a class="list-group-item mb-3" href="{{ route('page.show', 'privacy-policy') }}">Privacy
                                Policy</a>
                            <a class="list-group-item mb-3" href="{{ route('page.show', 'about-us') }}">About Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 pe-0">
                    <div>
                        <h5 class="text-white mt-4">Contact Us</h5>
                        <h6 class="text-grey-200 mt-3 py-2">Registered Address</h6>
                        <div class="head gap-2 d-flex flex-column">
                            <a class="nav-link text-grey-200" href="mailto:{{ $settings['site_email'] ?? 'N/A' }}"><i
                                    class="fa-solid fa-envelope me-2"></i>{{ $settings['site_email'] ?? 'N/A' }}</a>
                            <a class="nav-link text-grey-200" href="tel:{{ $settings['site_contact'] ?? 'N/A' }}"><i
                                    class="fa-solid fa-phone me-2"></i>{{ $settings['site_contact'] ?? 'N/A' }}</a>
                            <a class="nav-link text-grey-200 d-block" href="javascript:void(0)"><i
                                    class="fa-solid fa-location-dot me-2"></i>{{ $settings['site_location'] ?? 'N/A' }}</a>
                        </div>
                        <hr class="text-grey-200">
                        <h6 class="text-grey-200 py-2">Contact Office</h6>
                        <div class="head gap-2 d-flex flex-column">
                            <a class="nav-link text-grey-200"
                                href="mailto:{{ $settings['alternate_email'] ?? 'N/A' }}"><i
                                    class="fa-solid fa-envelope me-2"></i>{{ $settings['alternate_email'] ?? 'N/A' }}</a>
                            <a class="nav-link text-grey-200"
                                href="tel:{{ $settings['alternate_contact'] ?? 'N/A' }}"><i
                                    class="fa-solid fa-phone me-2"></i>{{ $settings['alternate_contact'] ?? 'N/A' }}</a>
                            <a class="nav-link text-grey-200 d-block" href="javascript:void(0)"><i
                                    class="fa-solid fa-location-dot me-2"></i>{{ $settings['alternate_location'] ?? 'N/A' }}</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="copyright text-grey-200">
                <p class="d-flex w-100 justify-content-around border-top pt-3 mb-0">Copyright {{ date('Y') }} all
                    rights
                    reserved
                </p>
            </div>
        </div>
    </div>
</section>
