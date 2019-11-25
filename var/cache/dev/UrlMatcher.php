<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'app_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, false, false, null],
            [['_route' => 'wild_show_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/wild/show(?:/([a-z0-9-]+))?(*:70)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [
            [['_route' => 'wild_show', 'slug' => 'Aucune série sélectionnée', '_controller' => 'App\\Controller\\WildController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
