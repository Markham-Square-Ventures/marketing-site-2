<?php

return [
    'production' => false,
    'baseUrl' => 'http://marketing-site-2.test',
    'title' => 'Markham Square',
    'description' => 'Supercharge your digital product development with a flexible, full-service product team.',
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
