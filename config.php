<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'googleAnalytics' => '',
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
        ],
    ],
    'pageUrl' => function($page, $url) {
        return stripslashes($page->baseUrl . $url);
    }
];
