<?php

namespace App\Services;

use App\Models\BookSource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DetailService
{
    /**
     * 获取详情
     * @param string $sourceKey
     * @param string $targetURL
     * @return array
     */
    public function getDetail(string $sourceKey, string $targetURL)
    {
        $source = $this->getSource($sourceKey);

        $queryService = new QueryService();
        $rules = $queryService->getDetailRule($source);

        return $queryService->getQueryList($targetURL, $rules);
    }

    /**
     * 获取章节列表
     * @param string $sourceKey
     * @param string $targetURL
     * @return array
     */
    public function getChapterList(string $sourceKey, string $targetURL)
    {
        $source = $this->getSource($sourceKey);

        $queryService = new QueryService();
        $rules = $queryService->getChaptersRule($source);

        return $queryService->getQueryList($targetURL, $rules, $source->chapter_rule);
    }

    /**
     * 获取书源
     * @param string $sourceKey
     * @return Builder|Collection|Model|object
     */
    protected function getSource(string $sourceKey)
    {
        return BookSource::query()->where('key', $sourceKey)->first();
    }
}
