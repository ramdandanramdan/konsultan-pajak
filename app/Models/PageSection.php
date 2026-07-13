<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;

    protected $fillable = ['page_slug', 'section_key', 'value', 'type'];

    public static function get(string $page, string $key, $default = null)
    {
        $section = static::where('page_slug', $page)->where('section_key', $key)->first();
        return $section ? $section->value : $default;
    }

    public static function set(string $page, string $key, $value, string $type = 'text')
    {
        return static::updateOrCreate(
            ['page_slug' => $page, 'section_key' => $key],
            ['value' => $value, 'type' => $type]
        );
    }

    public static function getAll(string $page)
    {
        return static::where('page_slug', $page)->pluck('value', 'section_key')->toArray();
    }
}
