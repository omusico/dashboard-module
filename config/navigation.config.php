<?php
return [
    'navigation' => [
        /*
         * Default menu
         */
        'default' => [
            'dashboard' => [
                'label' => 'My account',
                'route' => 'zf-listings/dashboard',
                'textdomain' => 'ZfListings\Dashboard',
            ],
        ],
        /*
         * User Dashboard menu
         */
        'dashboard' => [
            'dashboard' => [
                'label' => 'Dashboard',
                'route' => 'zf-listings/dashboard',
                'order' => -1000,
                'textdomain' => 'ZfListings\Dashboard',
            ],
            /* TODO: 'account' => [
                'label' => 'My account',
                'route' => 'zf-listings/dashboard/account',
                'order' => -990,
                'textdomain' => 'ZfListings\Dashboard',
            ],*/
        ],
    ],
];
