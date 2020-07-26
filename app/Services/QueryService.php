<?php

namespace App\Services;

use QL\Ext\AbsoluteUrl;
use QL\QueryList;

class QueryService
{
    protected $index = 0;

    /**
     * 获取爬取结果
     * @param string $searchURL
     * @param array $rules
     * @param string $range
     * @param string $baseURL
     * @return array
     */
    public function getQueryList(string $searchURL, array $rules, string $range = '', string $baseURL = '')
    {
        $ql = QueryList::getInstance();
        $ql->use(AbsoluteUrl::class);
        $ql->get($searchURL)
            ->absoluteUrl($baseURL)
            ->encoding('UTF-8')
            ->removeHead()
            ->rules($rules);

        if ($range) {
            $ql->range($range);
        }

        return $ql->queryData(function ($item) {
            $item['index'] = $this->index++;
            return $item;
        });
    }

    /**
     * 获取搜索抓取规则
     * @param $item
     * @return array
     */
    public function getSearchRule(&$item)
    {
        return [
            'name' => $this->formatRule($item->search_name_rule),
            'author' => $this->formatRule($item->search_author_rule),
            'cover' => $this->formatRule($item->search_cover_rule),
            'category' => $this->formatRule($item->search_category_rule),
            'new_chapter' => $this->formatRule($item->search_new_chapter_rule),
            'url' => $this->formatRule($item->search_url_rule)
        ];
    }

    /**
     * 获取详情抓取规则
     * @param $item
     * @return array
     */
    public function getDetailRule(&$item)
    {
        return [
            'name' => $this->formatRule($item->detail_name_rule),
            'author' => $this->formatRule($item->detail_author_rule),
            'cover' => $this->formatRule($item->detail_cover_rule),
            'category' => $this->formatRule($item->detail_category_rule),
            'new_chapter' => $this->formatRule($item->detail_new_chapter_rule),
            'description' => $this->formatRule($item->detail_description_rule)
        ];
    }

    /**
     * 获取章节抓取规则
     * @param $item
     * @return array
     */
    public function getChaptersRule(&$item)
    {
        return [
            'name' => $this->formatRule($item->chapter_name_rule),
            'url' => $this->formatRule($item->chapter_url_rule)
        ];
    }

    /**
     * 获取内容抓取规则
     * @param $item
     * @return array
     */
    public function getContentRule(&$item)
    {
        return [
            'name' => $this->formatRule($item->content_name_rule),
            'text' => $this->formatRule($item->content_text_rule),
            'prev_url' => $this->formatRule($item->content_prev_url_rule),
            'next_url' => $this->formatRule($item->content_next_url_rule)
        ];
    }

    protected function formatRule($value = '')
    {
        return $value ? explode('@', $value) : ['', ''];
    }
}
