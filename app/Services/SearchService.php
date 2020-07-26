<?php

namespace App\Services;


use App\Models\BookSource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\LazyCollection;

class SearchService
{
    /**
     * 聚合搜索
     * @param string $searchKey
     * @param $groupBy
     * @param string $groupKey
     * @return LazyCollection
     */
    public function search(string $searchKey, $groupBy = 'name')
    {
        $lazyCollection = $this->getLazyCollection($searchKey)->collapse();

        return $groupBy === false ? $lazyCollection : $lazyCollection->groupBy($groupBy);
    }

    /**
     * 获取书源
     * @return Builder[]|Collection
     */
    public function getSourceList()
    {
        return BookSource::query()
            ->where('status', true)
            ->get();
    }

    /**
     * 获取懒集合
     * @param string $searchKey
     * @return LazyCollection
     */
    public function getLazyCollection(string $searchKey)
    {
        return LazyCollection::make(function () use ($searchKey) {
           $sourceList = $this->getSourceList();
           $queryService = new QueryService();

           foreach ($sourceList as $source) {
               $searchURL = $this->getSearchURL($source->search_url, $searchKey);
               $rules = $queryService->getSearchRule($source);

               yield $queryService->getQueryList($searchURL, $rules, $source->search_rule, $source->url);
           }
        });
    }

    /**
     * 获取格式化后的目标网址
     * @param string $string
     * @param string $searchKey
     * @param string $search
     * @return string|string[]
     */
    public function getSearchURL(string $string, string $searchKey, string $search = '[searchKey]')
    {
        return str_replace($search, $searchKey, $string);
    }
}
