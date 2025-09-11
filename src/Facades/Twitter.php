<?php

namespace HamzaHassanM\LaravelSocialAutoPost\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Twitter
 *
 * @method static mixed share(string $caption, string $url)
 * @method static mixed shareImage(string $caption, string $image_url)
 * @method static mixed shareVideo(string $caption, string $video_url)
 * @method static mixed getTimeline(int $limit = 10)
 * @method static mixed getUserInfo()
 *
 * @see \HamzaHassanM\LaravelSocialAutoPost\Services\TwitterService
 */
class Twitter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HamzaHassanM\LaravelSocialAutoPost\Services\TwitterService::class;
    }
}
