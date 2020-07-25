<?php

namespace App\Http\Controllers\Api;

use App\Services\SearchService;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function search(Request $request)
    {
        $results = (new SearchService())->search('大主宰');

        dd($results->toArray());
    }
}
