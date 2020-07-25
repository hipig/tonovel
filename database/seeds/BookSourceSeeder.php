<?php

use App\Models\BookSource;
use Illuminate\Database\Seeder;

class BookSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sources = [
            [
                'name' => '酷小说',
                'key' => 'kuxiaoshuo',
                'url' => 'https://www.kuxiaoshuo.com',

                'search_url' => 'https://www.kuxiaoshuo.com/modules/article/search.php?searchkey=[searchKey]',
                'search_rule' => '#hotcontent tr:gt(1)',
                'search_name_rule' => 'td:eq(0) a@text',
                'search_author_rule' => 'td:eq(2)@text',
                'search_cover_rule' => '',
                'search_new_chapter_rule' => 'td:eq(1) a@text',
                'search_url_rule' => 'td:eq(0) a@href',

                'detail_name_rule' => '#info h1@text',
                'detail_cover_rule' => '#fmimg img@src',
                'detail_category_rule' => '#wrapper .con_top a:eq(1)@text',
                'detail_new_chapter_rule' => '#list dl dd:eq(0) a@text',
                'detail_description_rule' => '#intro p:eq(0)@html',

                'chapter_rule' => '#list',
                'chapter_name_rule' => 'dt:eq(1)~dd@text',
                'chapter_url_rule' => 'dt:eq(1)~dd@href',

                'content_name_rule' => '.bookname h1@text',
                'content_text_rule' => '#content@html',
                'content_prev_url_rule' => '.bottem1 a:eq(1)@href',
                'content_next_url_rule' => '.bottem1 a:eq(3)@href',
            ],
            [
                'name' => '笔趣阁',
                'key' => 'biquge',
                'url' => 'http://www.biquge.info',

                'search_url' => 'http://www.biquge.info/modules/article/search.php?searchkey=[searchKey]',
                'search_rule' => '#hotcontent tr:gt(1)',
                'search_name_rule' => 'td:eq(0) a@text',
                'search_author_rule' => 'td:eq(2)@text',
                'search_cover_rule' => '',
                'search_new_chapter_rule' => 'td:eq(1) a@text',
                'search_url_rule' => 'td:eq(0) a@href',

                'detail_name_rule' => '#info h1@text',
                'detail_cover_rule' => '#fmimg img@src',
                'detail_category_rule' => '#wrapper .con_top a:eq(1)@text',
                'detail_new_chapter_rule' => '#list dl dd:eq(0) a@text',
                'detail_description_rule' => '#intro p:eq(0)@html',

                'chapter_rule' => '#list',
                'chapter_name_rule' => 'dt:eq(1)~dd@text',
                'chapter_url_rule' => 'dt:eq(1)~dd@href',

                'content_name_rule' => '.bookname h1@text',
                'content_text_rule' => '#content@html',
                'content_prev_url_rule' => '.bottem1 a:eq(1)@href',
                'content_next_url_rule' => '.bottem1 a:eq(3)@href',
            ],
            [
                'name' => '笔趣阁【vipzw】',
                'key' => 'vipzw',
                'url' => 'https://www.vipzw.com',

                'search_url' => 'http://www.vipzw.com/search.php?searchkey=[searchKey]',
                'search_rule' => '#hotcontent .item',
                'search_name_rule' => 'dt a@text',
                'search_author_rule' => 'dt span@text',
                'search_cover_rule' => '.image img@src',
                'search_new_chapter_rule' => '',
                'search_url_rule' => 'dt a@href',

                'detail_name_rule' => '#info h1@text',
                'detail_cover_rule' => '#fmimg img@src',
                'detail_category_rule' => '#wrapper .con_top a:eq(1)@text',
                'detail_new_chapter_rule' => '#list dl dd:eq(0) a@text',
                'detail_description_rule' => '#intro p:eq(0)@html',

                'chapter_rule' => '#list',
                'chapter_name_rule' => 'dt:eq(1)~dd@text',
                'chapter_url_rule' => 'dt:eq(1)~dd@href',

                'content_name_rule' => '.bookname h1@text',
                'content_text_rule' => '#content@html',
                'content_prev_url_rule' => '.bottem1 a:eq(1)@href',
                'content_next_url_rule' => '.bottem1 a:eq(3)@href',
            ]
        ];

        foreach ($sources as $source) {
            $source['is_default'] = true;
            BookSource::create($source);
        }
    }
}
