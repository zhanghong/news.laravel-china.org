<?php

/* Simple configuration file for Laravel Sitemap package */
return [
    'use_cache'            => false,
    'cache_key'            => 'laravel-sitemap.' . config('app.url'),
    'cache_duration'       => 3600,
    'escaping'             => true,
    'use_limit_size'       => false,
    'max_size'             => null,
    'use_styles'           => true,
    'styles_location'      => null,
    // 这里你可以根据实际情况自定义
    'custom'               => [
                              'posts' => [
                                  'priority' => '0.9',
                                  'freq'     => 'daily',
                                  'lastMod'  => 'created_at',
                              ],

                          ],
];
