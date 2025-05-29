<aside class="layout-menu menu-vertical menu bg-menu-theme" id="layout-menu">
    <div class="app-brand demo d-flex justify-content-center">
        <a class="app-brand-link" href="{{ route('home') }}">

            <img src="{{ $settings['site_main_logo'] ? asset('admin/images/setting/' . $settings['site_main_logo']) : asset('admin/images/healthcare.png') }}"
                alt="logo" style="width: 210px">
        </a>

        <a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" href="javascript:void(0);">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- CMS -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">CMS</span></li>
        <!-- Cards -->

        <li class="menu-item @if (Request::segment(2) == 'members' || Request::segment(2) == 'memberinfos') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-user-check"></i>
                <div data-i18n="Memberinfos">G/L Members</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'memberinfos' ? 'active' : '' }}"
                        href="{{ route('admin.memberinfos.index') }}">
                        <div data-i18n="Accordion">Informations</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'members' ? 'active' : '' }}"
                        href="{{ route('admin.members.index') }}">
                        <div data-i18n="Accordion">General/Lifetime</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'ourteams' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.ourteams.index') }}">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div data-i18n="Basic">Executive Members</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'applicants' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.applicants.index') }}">
                <i class="menu-icon tf-icons bx bxl-magento"></i>
                <div data-i18n="Basic">Applicants</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'articles' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.articles.index') }}">
                <i class="menu-icon tf-icons bx bx-bar-chart-alt"></i>
                <div data-i18n="Basic">Articles</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'blogs' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.blogs.index') }}">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Basic">Blogs</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'news' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.news.index') }}">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Basic">Activities</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'mediacoverages' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.mediacoverages.index') }}">
                <i class="menu-icon tf-icons bx bx-slideshow"></i>
                <div data-i18n="Basic">Media Coverages</div>
            </a>
        </li>

        <li class="menu-item @if (Request::segment(2) == 'links' || Request::segment(2) == 'documents') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-podcast"></i>
                <div data-i18n="resources">Resources</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'links' ? 'active' : '' }}"
                        href="{{ route('admin.links.index') }}">
                        <div data-i18n="Accordion">Useful Links</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'documents' ? 'active' : '' }}"
                        href="{{ route('admin.documents.index') }}">
                        <div data-i18n="Accordion">Useful Documents</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="menu-item {{ Request::segment(2) == 'services' ? 'active' : '' }}">
            <a href="{{ route('admin.services.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Basic">Services</div>
            </a>
        </li> --}}

        <li class="menu-item {{ Request::segment(2) == 'events' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.events.index') }}">
                <i class="menu-icon tf-icons bx bx-calendar-check"></i>
                <div data-i18n="Basic">Events</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'faqs' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.faqs.index') }}">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="Basic">FAQs</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'galleries' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.galleries.index') }}">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="Basic">Gallery</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'inquirypersons' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.inquirypersons.index') }}">
                <i class="menu-icon tf-icons bx bx-user-voice"></i>
                <div data-i18n="Basic">Inquiry Persons</div>
            </a>
        </li>

        <!-- General Settings  -->
        <li class="menu-item @if (Request::segment(2) == 'pages' ||
                Request::segment(2) == 'socialmedias' ||
                Request::segment(2) == 'sliders' ||
                Request::segment(2) == 'settings') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="General Setting">Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'pages' ? 'active' : '' }}"
                        href="{{ route('admin.pages.index') }}">
                        <div data-i18n="Accordion">Pages</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'socialmedias' ? 'active' : '' }}"
                        href="{{ route('admin.socialmedias.index') }}">
                        <div data-i18n="Accordion">Social Medias</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'sliders' ? 'active' : '' }}"
                        href="{{ route('admin.sliders.index') }}">
                        <div data-i18n="Accordion">Sliders</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'settings' ? 'active' : '' }}"
                        href="{{ route('admin.settings.index') }}">
                        <div data-i18n="Accordion">Global Settings</div>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</aside>
