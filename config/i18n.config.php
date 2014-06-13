<?php
return [
    'tryd_i18n' => [
        'translator' => [
            'translation_file_patterns' => [
                [
                    'type'     => 'gettext',
                    'base_dir' => __DIR__ . '/../language',
                    'pattern'  => '%s.mo',
                    'text_domain' => 'ZfListings\UserDashboard',
                ],
            ],
        ],
    ],
];
