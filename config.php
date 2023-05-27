<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://marketing-site-2.test',
    'title' => 'Markham Square',
    'description' => 'We help teams succeed on the web.',
    'collections' => [
        'posts' => [
            'filter' => function ($item) {
                return $item->published;
            },
            'author' => 'Markham Square',
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'case_study' => [
            'path' => 'case-study/{filename}',
        ],
    ],
    'isSelected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section);
    },
];
