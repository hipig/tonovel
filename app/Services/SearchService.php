<?php

namespace App\Services;


use App\Models\BookSource;
use Illuminate\Support\LazyCollection;
use QL\QueryList;

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
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getSourceList()
    {
        return BookSource::query()
            ->where('status', true)
            ->paginate();
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

           foreach ($sourceList as $source) {
               $searchURL = $this->getSearchURL($source->search_url, $searchKey);
               $rules = $this->formatRule($source);

               yield $this->getQueryList($searchURL, $rules, $source->search_rule);
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

    /**
     * 获取爬取结果
     * @param string $searchURL
     * @param array $rules
     * @param string $range
     * @return array
     */
    public function getQueryList(string $searchURL, array $rules, string $range = '')
    {
        $ql = QueryList::get($searchURL)
        ->encoding('UTF-8')
        ->removeHead()
        ->rules($rules);

        if ($range) {
            $ql->range($range);
        }

        return $ql->queryData();
    }

    /**
     * 格式化抓取规则
     * @param $item
     * @return array
     */
    public function formatRule(&$item)
    {
        $formatter = function ($value) {
            return $value ? explode('@', $value) : ['', ''];
        };

        return [
            'name' => $formatter($item->search_name_rule),
            'author' => $formatter($item->search_author_rule),
            'cover' => $formatter($item->search_cover_rule),
            'category' => $formatter($item->search_category_rule),
            'new_chapter' => $formatter($item->search_new_chapter_rule),
            'url' => $formatter($item->search_url_rule)
        ];
    }
}
