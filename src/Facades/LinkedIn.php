<?php

namespace HamzaHassanM\LaravelSocialAutoPost\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class LinkedIn
 *
 * @method static mixed share(string $caption, string $url)
 * @method static mixed shareImage(string $caption, string $image_url)
 * @method static mixed shareVideo(string $caption, string $video_url)
 * @method static mixed shareToCompanyPage(string $caption, string $url)
 * @method static mixed getUserInfo()
 *
 * @see \HamzaHassanM\LaravelSocialAutoPost\Services\LinkedInService
 */
class LinkedIn extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HamzaHassanM\LaravelSocialAutoPost\Services\LinkedInService::class;
    }
}
