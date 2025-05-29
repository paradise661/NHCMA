<header>
    {{-- <nav class="navbar bg-primary navbar-expand-lg py-3">
        <div class="container">
            <div class=" navbar " id="navbarNavAltMarkup">
                <div class="head d-flex align-items-center gap-1">
                    <a class="nav-link text-white" href="#"><i
                            class="fa-solid fa-envelope me-2"></i>{{ $settings['site_email'] ?? '' }}</a>
    <a class="nav-link text-white" href="#"><i class="fa-solid fa-phone me-2"></i>{{ $settings['site_contact'] ?? '' }}</a>
    <a class="nav-link text-white d-block" href=""><i class="fa-solid fa-location-dot me-2"></i>{{ $settings['site_location'] ?? '' }}</a>
    </div>
    <a class="btn btn-secondary text-white br-0 py-2" href="/page/become-a-member">Become
        a
        member</a>

    </div>
    </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg py-3">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="{{ route('home') }}">
                @if ($settings['site_main_logo'])
                    <img src="{{ asset('admin/images/setting/' . $settings['site_main_logo']) }}" alt="logo"
                        width="290px" height="60px">
                @else
                    <img src="{{ asset('frontend/assets/images/logo1.png') }}" alt="logo" width="290px"
                        height="60px">
                @endif
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" type="button"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'menu-active' : '' }} fw-medium"
                            href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                            href="{{ route('about') }}" role="button" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('page.show', 'about-us') }}">About
                                    Organization</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('page.show', 'our-vision') }}">Vision &
                                    Mission</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('page.show', 'core-values') }}">Core Values</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('page.show', 'message-from-president') }}">Message From
                                    President</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('ourteams') }}">NHCMA Executive Bodies</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                            href="#" role="button" aria-expanded="false">
                            Member Directory
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('ourteams') }}">Executive
                                    Committee</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('lifetime.members') }}">Lifetime
                                    Member</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('general.members') }}">General
                                    Member</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                            href="#" role="button" aria-expanded="false">
                            News & Activities
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('activities') }}">Activities</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('mediacoverages') }}">News Coverage By
                                    Media</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('articles') }}">Research Article Published</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown fw-medium">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                            href="#" role="button" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('usefullinks') }}">Useful Links</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('usefuldocuments') }}">Useful Documents</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item fw-medium">
                        <a class="nav-link {{ Request::segment(1) == 'contact' ? 'menu-active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>

                    <a class="btn btn-secondary text-white br-0 py-2"
                        href="{{ route('page.show', 'become-a-member') }}">Membership</a>
                </ul>
            </div>
        </div>
    </nav>
</header>
