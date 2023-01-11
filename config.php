<?php

return [
    'production' => false,
    'baseUrl' => 'http://marketing-site-2.test/',
    'title' => 'Markham Square',
    'description' => 'Website description.',
    'collections' => [
        'posts' => [
            'filter' => function ($item) {
                return $item->published;
            },
            'author' => 'Markham Square',
            'sort' => '-date',
            'path' => 'essays/{filename}',
        ],
    ],
];
