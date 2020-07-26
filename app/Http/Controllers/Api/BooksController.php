<?php

namespace App\Http\Controllers\Api;

use App\Models\BookSource;
use App\Services\DetailService;
use App\Services\QueryService;
use App\Services\SearchService;
use Illuminate\Http\Request;
use QL\QueryList;

class BooksController extends Controller
{
    public function search(Request $request, SearchService $searchService)
    {
        $results = $searchService->search('大主宰');

        dd($results->toArray());
    }

    public function detail(Request $request, DetailService $detailService)
    {
        $detailURL = 'https://www.kuxiaoshuo.com/4_4456/';
        $sourceKey = 'kuxiaoshuo';

        $result = $detailService->getDetail($sourceKey, $detailURL);

        dd($result);
    }

    public function chapter(Request $request, DetailService $detailService)
    {
        $detailURL = 'https://www.kuxiaoshuo.com/4_4456/';
        $sourceKey = 'kuxiaoshuo';

        $results = $detailService->getChapterList($sourceKey, $detailURL);

        dd($results);
    }
}
