<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\WildController::index'], [], [['text', '/']], [], []],
    'wild_show' => [[], ['_controller' => 'App\\Controller\\WildController::show'], [], [['text', '/wild/show']], [], []],
    'wild_show_index' => [[], ['_controller' => 'App\\Controller\\WildController::index'], [], [['text', '/']], [], []],
];
