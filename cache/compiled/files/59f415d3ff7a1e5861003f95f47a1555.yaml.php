<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/plugins/social-feed/blueprints.yaml',
    'modified' => 1527795229,
    'data' => [
        'name' => 'Social Feed',
        'version' => '0.1.2',
        'description' => 'This Grav plugin allow you to fetch feeds from social networks, and give you tools for displaying them in your website.',
        'icon' => 'share-alt',
        'author' => [
            'name' => 'Kévin Marcachi',
            'email' => 'kevin.marcachi@acseo.fr'
        ],
        'homepage' => 'https://github.com/moduleon/grav-plugin-social-feed',
        'keywords' => 'grav, plugin, social feed',
        'bugs' => 'https://github.com/moduleon/grav-plugin-social-feed/issues',
        'docs' => 'https://github.com/moduleon/grav-plugin-social-feed/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twitter' => [
                    'type' => 'section',
                    'title' => 'Twitter config',
                    'underline' => true,
                    'fields' => [
                        'twitter_consumer_key' => [
                            'type' => 'text',
                            'label' => 'Consumer key'
                        ],
                        'twitter_consumer_secret' => [
                            'type' => 'text',
                            'label' => 'Consumer secret'
                        ],
                        'twitter_feeds' => [
                            'type' => 'list',
                            'label' => 'Accounts to follow',
                            'fields' => [
                                '.username' => [
                                    'type' => 'text',
                                    'label' => 'Username'
                                ]
                            ]
                        ]
                    ]
                ],
                'facebook' => [
                    'type' => 'section',
                    'title' => 'Facebook config',
                    'underline' => true,
                    'fields' => [
                        'facebook_app_id' => [
                            'type' => 'text',
                            'label' => 'App id'
                        ],
                        'facebook_app_secret' => [
                            'type' => 'text',
                            'label' => 'App secret'
                        ],
                        'facebook_feeds' => [
                            'type' => 'list',
                            'label' => 'Accounts to follow',
                            'fields' => [
                                '.username' => [
                                    'type' => 'text',
                                    'label' => 'Username'
                                ]
                            ]
                        ]
                    ]
                ],
                'instagram' => [
                    'type' => 'section',
                    'title' => 'Instagram config',
                    'underline' => true,
                    'fields' => [
                        'instagram_client_id' => [
                            'type' => 'text',
                            'label' => 'Client id'
                        ],
                        'instagram_access_token' => [
                            'type' => 'text',
                            'label' => 'Access token'
                        ],
                        'instagram_feeds' => [
                            'type' => 'list',
                            'label' => 'Accounts to follow',
                            'fields' => [
                                '.username' => [
                                    'type' => 'text',
                                    'label' => 'Username'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
