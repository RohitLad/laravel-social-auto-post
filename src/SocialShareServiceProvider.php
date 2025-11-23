<?php

namespace HamzaHassanM\LaravelSocialAutoPost;

use HamzaHassanM\LaravelSocialAutoPost\Services\FacebookService;
use HamzaHassanM\LaravelSocialAutoPost\Services\TelegramService;
use HamzaHassanM\LaravelSocialAutoPost\Services\TwitterService;
use HamzaHassanM\LaravelSocialAutoPost\Services\LinkedInService;
use HamzaHassanM\LaravelSocialAutoPost\Services\InstagramService;
use HamzaHassanM\LaravelSocialAutoPost\Services\TikTokService;
use HamzaHassanM\LaravelSocialAutoPost\Services\YouTubeService;
use HamzaHassanM\LaravelSocialAutoPost\Services\PinterestService;
use HamzaHassanM\LaravelSocialAutoPost\Services\SocialMediaManager;
use Illuminate\Support\ServiceProvider;

class SocialShareServiceProvider extends ServiceProvider {

    public function boot() {
        $config = __DIR__.'/config/autopost.php';
        $this->publishes([
             $config => config_path('autopost.php'),
        ], ['autopost']);
        $this->mergeConfigFrom( $config, 'autopost');
    }

    public function register() {
        // Register all social media services as singletons
        $this->app->bind(FacebookService::class, function ($app) {
            return new FacebookService();
        });

        $this->app->bind(TelegramService::class, function ($app) {
            return new TelegramService();
        });

        $this->app->bind(TwitterService::class, function ($app) {
            return new TwitterService();
        });

        $this->app->bind(LinkedInService::class, function ($app) {
            return new LinkedInService();
        });

        $this->app->bind(InstagramService::class, function ($app) {
            return new InstagramService();
        });

        $this->app->bind(TikTokService::class, function ($app) {
            return new TikTokService();
        });

        $this->app->bind(YouTubeService::class, function ($app) {
            return new YouTubeService();
        });

        $this->app->bind(PinterestService::class, function ($app) {
            return new PinterestService();
        });

        $this->app->bind(SocialMediaManager::class, function ($app) {
            return new SocialMediaManager();
        });

        // Register service aliases
        $this->app->alias(FacebookService::class, 'facebook');
        $this->app->alias(TelegramService::class, 'telegram');
        $this->app->alias(TwitterService::class, 'twitter');
        $this->app->alias(LinkedInService::class, 'linkedin');
        $this->app->alias(InstagramService::class, 'instagram');
        $this->app->alias(TikTokService::class, 'tiktok');
        $this->app->alias(YouTubeService::class, 'youtube');
        $this->app->alias(PinterestService::class, 'pinterest');
        $this->app->alias(SocialMediaManager::class, 'socialmedia');

    }

}