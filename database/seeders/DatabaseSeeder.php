<?php

namespace Database\Seeders;

use App\Models\Configure;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $items = [
            ['site_main_logo', Null],
            ['site_footer_logo', Null],
            ['site_information', 'L&ouml;rem ipsum od ohet dilogi. Bell trabel, samuligt, oh&ouml;bel utom diska. Jinesade bel n&auml;r feras redorade i belogi. FAR paratyp i muv&aring;ning, och pesask vyfisat. Viktiga poddradio har un mad och inde.'],
            ['map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4648540005687!2d85.31808155073865!3d27.702930232208292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a97bc7e29b%3A0xde8c83422b6c7218!2sNepal%20Medical%20Association!5e0!3m2!1sen!2snp!4v1669718170749!5m2!1sen!2snp'],
            ['site_contact', '9800000000'],
            ['site_email', 'admin@healthcare.com'],
            ['site_location', 'Kathmandu, Nepal'],

            ['alternate_contact', '9800000000'],
            ['alternate_email', 'admin@healthcare.com'],
            ['alternate_location', 'Kathmandu, Nepal'],

            ['site_copyright', '2022 All right Reserved'],


            ['homepage_seo_title', 'Nepal Healthcare Service Association'],
            ['homepage_seo_description', 'Nepal Healthcare Service Association'],
            ['homepage_seo_keywords', 'Nepal Healthcare Service Association'],
            ['homepage_external_link', 'https://nhcma.com.np/about'],
            ['fav_icon', null],

            ['contact_section_description', 'We love to hear from you. Our friendly team is always here to chat'],
            ['contact_seo_title', 'Nepal Healthcare Service Association-Contact'],
            ['contact_seo_keywords', 'Nepal Healthcare Service Association'],
            ['contact_seo_description', 'Nepal Healthcare Service Association '],
            ['faq_image', null],

            ['events_seo_title', 'Nepal Healthcare Service Association - events'],
            ['events_seo_keywords', 'events'],
            ['events_seo_description', 'events Healthcare'],

            ['blogs_seo_title', 'Nepal Healthcare Service Association - blogs'],
            ['blogs_seo_keywords', 'blogs'],
            ['blogs_seo_description', 'blogs Healthcare'],

            ['news_seo_title', 'Nepal Healthcare Service Association - news'],
            ['news_seo_keywords', 'news'],
            ['news_seo_description', 'news Healthcare'],

            ['media_coverage_image', null],
        ];

        if (count($items)) {
            foreach ($items as $item) {
                \App\Models\Setting::create([
                    'key' => $item[0],
                    'value' => $item[1],
                ]);
            }
        }

        // User::create([
        //     'name' => 'Super Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password'),
        // ]);

        Configure::create([
            'email' => 'healthcare@gmail.com',
            'phone' => '9800000000',
            'location' => 'Putalisadak, Kathmandu',
            'description' => 'Say somethings',
        ]);
    }
}
