<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use QL\QueryList;

class BooksController extends Controller
{
    public function search(Request $request)
    {
        $rule = [
            'title' => ['td:eq(0) a','text'],
            'new_chapter' => ['td:eq(1) a','text'],
            'author' => ['td:eq(2)','text'],
            'size' => ['td:eq(3)','text'],
            'update_date' => ['td:eq(4)','text'],
            'status' => ['td:eq(5)','text'],
        ];

        $results = QueryList::get('https://www.kuxiaoshuo.com/modules/article/search.php?searchkey=%E5%A4%A7%E4%B8%BB%E5%AE%B0')
            ->encoding('UTF-8')
            ->removeHead()
            ->rules($rule)
            ->range('#hotcontent tr:gt(1)')
            ->queryData();

        dd($results);
    }
}
