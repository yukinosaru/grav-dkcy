<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/config/site.yaml',
    'modified' => 1529326400,
    'data' => [
        'title' => 'the powder room',
        'description' => 'Wondering and wandering',
        'author' => [
            'name' => 'Daniel Yeo',
            'email' => 'me@dkcy.com'
        ],
        'absolute_urls' => true,
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Wondering and wandering.'
        ],
        'summary' => [
            'size' => 100,
            'striptags' => true
        ],
        'global_featured_image' => 'featured.jpg',
        'social' => [
            0 => [
                'text' => 'twitter',
                'url' => 'http://www.twitter.com/yukinosaru'
            ],
            1 => [
                'text' => 'linkedin',
                'url' => 'https://www.linkedin.com/in/dkcyeo'
            ],
            2 => [
                'text' => 'home',
                'url' => 'http://www.dkcy.com'
            ]
        ],
        'slider' => [
            0 => [
                'image' => 'sixt.jpg'
            ],
            1 => [
                'image' => 'montblanc.jpg'
            ],
            2 => [
                'image' => 'tete.jpg'
            ]
        ],
        'menu' => [
            0 => [
                'url' => 'error',
                'text' => 'Error Page'
            ]
        ]
    ]
];
