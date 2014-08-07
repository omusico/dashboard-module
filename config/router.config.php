<?php
return [
    'router' => [
        'routes' => [
            'tryd-dashboard' => [
                'options' => [
                    'route' => '/user/dashboard',
                ],
            ],
            'zf-listings' => [
                'child_routes' => [
                    'dashboard' => [
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => [
                            'route' => '/user/dashboard',
                            'defaults' => [
                                'controller' => 'Tryd\Dashboard\Controller\Dashboard',
                                'action' => 'index',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
