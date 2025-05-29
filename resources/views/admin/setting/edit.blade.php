@extends('layouts.admin.master')
@section('title', 'Website Settings')

@section('content')
    @include('admin.includes.message')
    <div class="content">
        <div class="container-fluid">
            <div class="">
                <div class="card-body p-0">
                    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card card-primary shadow br-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 col-sm-2 nav flex-column gap-2 nav-pills" id="v-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        <button class="nav-link text-start active" id="v-pills-global-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-global" type="button"
                                            role="tab" aria-controls="v-pills-global"
                                            aria-selected="true">Global</button>
                                        <button class="nav-link text-start" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="false">Homepage</button>

                                        <button class="nav-link text-start" id="v-pills-contacts-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-contacts" type="button" role="tab"
                                            aria-controls="v-pills-contacts" aria-selected="false">Contact</button>

                                        <button class="nav-link text-start" id="v-pills-seo-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-seo" type="button" role="tab"
                                            aria-controls="v-pills-seo" aria-selected="false">Seo</button>
                                    </div>
                                    <div class="col-9 col-sm-10 tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-global" role="tabpanel"
                                            aria-labelledby="v-pills-global-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_logo">Site Main Logo</label>
                                                        <div class="custom-file">
                                                            <input class="mainlogo" id="site_logo"
                                                                data-default-file="{{ $settings['site_main_logo'] != null ? asset('admin/images/setting') . '/' . $settings['site_main_logo'] : null }}"
                                                                data-show-remove="false" type="file"
                                                                name="site_main_logo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="footer_logo">Site Footer Logo</label>
                                                        <div class="custom-file">
                                                            <input class="mainlogo" id="sitefooter_logo"
                                                                data-default-file="{{ $settings['site_footer_logo'] != null ? asset('admin/images/setting') . '/' . $settings['site_footer_logo'] : null }}"
                                                                data-show-remove="false" type="file"
                                                                name="site_footer_logo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="banner_image">Fav Icon</label>
                                                        <div class="custom-file">
                                                            <input class="fav_icon" id="fav_icon"
                                                                data-default-file="{{ $settings['fav_icon'] != null ? asset('admin/images/setting') . '/' . $settings['fav_icon'] : null }}"
                                                                data-show-remove="false" type="file" name="fav_icon">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="affilated_image">Affilated Image</label>
                                                        <div class="custom-file">
                                                            <input class="affilated_image" id="affilated_image"
                                                                data-default-file="{{ $settings['affilated_image'] != null ? asset('admin/images/setting') . '/' . $settings['affilated_image'] : null }}"
                                                                data-show-remove="false" type="file"
                                                                name="affilated_image">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="site_information">Site Information</label>
                                                        <textarea class="form-control br-8" name="site_information" rows="4" placeholder="Enter Site Information">{{ $settings['site_information'] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="site_copyright">Site Copyright</label>
                                                        <textarea class="form-control br-8" name="site_copyright" rows="4" placeholder="Enter Site Copyright">{{ $settings['site_copyright'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="media_coverage_image">Media Coverage Image</label>
                                                        <div class="custom-file">
                                                            <input class="media_coverage_image" id="media_coverage_image"
                                                                data-default-file="{{ $settings['media_coverage_image'] != null ? asset('admin/images/setting') . '/' . $settings['media_coverage_image'] : null }}"
                                                                data-show-remove="false" type="file"
                                                                name="media_coverage_image">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="homepage_external_link">Homepage External Link</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="homepage_external_link"
                                                            value="{{ $settings['homepage_external_link'] ?? '' }}"
                                                            placeholder="Enter Link">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="homepage_seo_title">Homepage Seo Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="homepage_seo_title"
                                                            value="{{ $settings['homepage_seo_title'] ?? '' }}"
                                                            placeholder="Enter homepage Seo Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="homepage_seo_description">Homepage Seo
                                                            Keywords</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="homepage_seo_description"
                                                            value="{{ $settings['homepage_seo_description'] ?? '' }}"
                                                            placeholder="Enter Homepage Seo Keywords">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="homepage_seo_keywords">Homepage Seo
                                                            Description</label>
                                                        <textarea class="form-control br-8" name="homepage_seo_keywords" rows="4" placeholder="Enter Something ...">{{ $settings['homepage_seo_keywords'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-contacts" role="tabpanel"
                                            aria-labelledby="v-pills-contacts-tab">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="site_top_bar">Map</label>
                                                        <textarea class="form-control br-8" name="map" rows="4" placeholder="Enter Map Details">{{ $settings['map'] ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_phone">Contact Number</label>
                                                        <input class="form-control br-8" type="tel"
                                                            name="site_contact"
                                                            value="{{ $settings['site_contact'] ?? '' }}"
                                                            placeholder="Enter Contact Number">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_phone">Alternate Contact</label>
                                                        <input class="form-control br-8" type="tel"
                                                            name="alternate_contact"
                                                            value="{{ $settings['alternate_contact'] ?? '' }}"
                                                            placeholder="Enter Contact Number">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_email">Email</label>
                                                        <input class="form-control br-8" type="email" name="site_email"
                                                            value="{{ $settings['site_email'] ?? '' }}"
                                                            placeholder="Enter Email">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="alternate_email">Alternate Email</label>
                                                        <input class="form-control br-8" type="email"
                                                            name="alternate_email"
                                                            value="{{ $settings['alternate_email'] ?? '' }}"
                                                            placeholder="Enter Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="site_location">Location</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="site_location"
                                                            value="{{ $settings['site_location'] ?? '' }}"
                                                            placeholder="Enter Location">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="alternate_location">Alternate Location</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="alternate_location"
                                                            value="{{ $settings['alternate_location'] ?? '' }}"
                                                            placeholder="Enter Location">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_section_description">Contact Section
                                                            Description</label>
                                                        <textarea class="form-control br-8" name="contact_section_description" rows="4"
                                                            placeholder="Enter Something ...">{{ $settings['contact_section_description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_seo_title">Contact Seo Title</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="contact_seo_title"
                                                            value="{{ $settings['contact_seo_title'] ?? '' }}"
                                                            placeholder="Enter Seo Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_seo_keywords">Contact Seo
                                                            Keywords</label>
                                                        <input class="form-control br-8" type="text"
                                                            name="contact_seo_keywords"
                                                            value="{{ $settings['homepage_seo_keywords'] ?? '' }}"
                                                            placeholder="Enter Seo Keywords">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <label for="contact_seo_description">Contact Seo
                                                            Description</label>
                                                        <textarea class="form-control br-8" name="contact_seo_description" rows="4" placeholder="Enter Something ...">{{ $settings['contact_seo_description'] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="faq_image">FAQs Section Image</label>
                                                        <div class="custom-file">
                                                            <input class="faq_image" id="faq_image"
                                                                data-default-file="{{ $settings['faq_image'] != null ? asset('admin/images/setting') . '/' . $settings['faq_image'] : null }}"
                                                                data-show-remove="false" type="file" name="faq_image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-seo" role="tabpanel"
                                            aria-labelledby="v-pills-seo-tab">

                                            <fieldset class="border p-3 border-secondary">
                                                <legend class="float-none w-auto legend-title">Events :</legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="events_seo_title">Events Seo Title</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="events_seo_title"
                                                                value="{{ $settings['events_seo_title'] ?? '' }}"
                                                                placeholder="Enter Seo Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="events_seo_keywords">Events Seo
                                                                Keywords</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="events_seo_keywords"
                                                                value="{{ $settings['events_seo_keywords'] ?? '' }}"
                                                                placeholder="Enter Seo Keywords">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="events_seo_description">Events Seo
                                                                Description</label>
                                                            <textarea class="form-control br-8" name="events_seo_description" rows="4" placeholder="Enter Something ...">{{ $settings['events_seo_description'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>

                                            <fieldset class="border p-3 border-secondary">
                                                <legend class="float-none w-auto legend-title">News :</legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="news_seo_title">News Seo Title</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="news_seo_title"
                                                                value="{{ $settings['news_seo_title'] ?? '' }}"
                                                                placeholder="Enter Seo Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="news_seo_keywords">News Seo
                                                                Keywords</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="news_seo_keywords"
                                                                value="{{ $settings['news_seo_keywords'] ?? '' }}"
                                                                placeholder="Enter Seo Keywords">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="news_seo_description">News Seo
                                                                Description</label>
                                                            <textarea class="form-control br-8" name="news_seo_description" rows="4" placeholder="Enter Something ...">{{ $settings['news_seo_description'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>

                                            <fieldset class="border p-3 border-secondary">
                                                <legend class="float-none w-auto legend-title">Blogs :</legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="blogs_seo_title">Blogs Seo Title</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="blogs_seo_title"
                                                                value="{{ $settings['blogs_seo_title'] ?? '' }}"
                                                                placeholder="Enter Seo Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="blogs_seo_keywords">Blogs Seo
                                                                Keywords</label>
                                                            <input class="form-control br-8" type="text"
                                                                name="blogs_seo_keywords"
                                                                value="{{ $settings['blogs_seo_keywords'] ?? '' }}"
                                                                placeholder="Enter Seo Keywords">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="blogs_seo_description">Blogs Seo
                                                                Description</label>
                                                            <textarea class="form-control br-8" name="blogs_seo_description" rows="4" placeholder="Enter Something ...">{{ $settings['blogs_seo_description'] ?? '' }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                        </div>

                                    </div>
                                </div>
                                <div class="card-footers">
                                    <button class="btn btn-lg btn-primary" type="submit"><i
                                            class="fa-solid fa-rotate"></i> Update Setting</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $('.mainlogo').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.footerlogo').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.fav_icon').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.faq_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.media_coverage_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        $('.affilated_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endsection
