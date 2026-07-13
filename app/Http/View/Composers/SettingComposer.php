<?php

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;

class SettingComposer
{
    public function compose($view)
    {
        $settings = [
            'site_name' => Setting::get('site_name', 'KONSULTAN PAJAK'),
            'site_tagline' => Setting::get('site_tagline', 'Solusi Pajak Terpercaya'),
            'footer_description' => Setting::get('footer_description', 'Solusi pajak terpercaya untuk bisnis Anda. Kami membantu menciptakan kepatuhan & efisiensi finansial.'),
            'contact_address' => Setting::get('contact_address', 'Jl. Prof. Dr. Satrio No. 12, Kuningan, Setiabudi, Jakarta Selatan, 12940'),
            'contact_email' => Setting::get('contact_email', 'info@konsultanpajak.com'),
            'contact_phone' => Setting::get('contact_phone', '+62 812-3456-7890'),
            'whatsapp_number' => Setting::get('whatsapp_number', '6285890750820'),
            'whatsapp_display' => Setting::get('whatsapp_display', '0858-9075-0820'),
            'google_maps_embed' => Setting::get('google_maps_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.275510659779!2d106.8228183147169!3d-6.223053895493054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4e99d8689%3A0xc3f6d71b8d6f5f9e!2sKuningan%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1634024479577!5m2!1sen!2sid'),
            'social_facebook' => Setting::get('social_facebook', '#'),
            'social_twitter' => Setting::get('social_twitter', '#'),
            'social_instagram' => Setting::get('social_instagram', '#'),
            'social_linkedin' => Setting::get('social_linkedin', '#'),
        ];

        $view->with('settings', $settings);
    }
}
