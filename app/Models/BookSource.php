<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookSource extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'key',
        'url',

        'search_url',
        'search_rule',
        'search_name_rule',
        'search_author_rule',
        'search_cover_rule',
        'search_category_rule',
        'search_new_chapter_rule',
        'search_url_rule',

        'detail_name_rule',
        'detail_author_rule',
        'detail_cover_rule',
        'detail_category_rule',
        'detail_new_chapter_rule',
        'detail_description_rule',

        'chapter_rule',
        'chapter_name_rule',
        'chapter_url_rule',

        'content_name_rule',
        'content_text_rule',
        'content_prev_url_rule',
        'content_next_url_rule',

        'is_default',
        'status',
        'index'
    ];

    protected $casts = [
        'is_default' => 'boolean',
        'status' => 'boolean'
    ];
}
