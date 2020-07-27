<?php

namespace App\Services;

use App\Models\BookSource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ContentService
{
    /**
     * 获取正文
     * @param string $sourceKey
     * @param string $targetURL
     * @return array
     */
    public function getContent(string $sourceKey, string $targetURL)
    {
        $source = $this->getSource($sourceKey);

        $queryService = new QueryService();
        $rules = $queryService->getContentRule($source);

        return $queryService->getQueryList($targetURL, $rules);
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
