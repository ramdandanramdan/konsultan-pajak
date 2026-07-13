<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $groups = [
            'Identitas Situs' => ['site_name', 'site_tagline', 'footer_description'],
            'Informasi Kontak' => ['contact_address', 'contact_email', 'contact_phone', 'whatsapp_number', 'whatsapp_display'],
            'Google Maps' => ['google_maps_embed'],
            'Social Media' => ['social_facebook', 'social_twitter', 'social_instagram', 'social_linkedin'],
        ];

        $settings = Setting::pluck('value', 'key')->toArray();

        return view('admin.settings.index', compact('groups', 'settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'settings' => 'required|array',
        ]);

        foreach ($validated['settings'] as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
