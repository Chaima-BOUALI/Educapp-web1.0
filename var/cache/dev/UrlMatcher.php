<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/candidat' => [[['_route' => 'candidat_index', '_controller' => 'App\\Controller\\CandidatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidat/new' => [[['_route' => 'candidat_new', '_controller' => 'App\\Controller\\CandidatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formateur' => [[['_route' => 'formateur_index', '_controller' => 'App\\Controller\\FormateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/formateur/new' => [[['_route' => 'formateur_new', '_controller' => 'App\\Controller\\FormateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/publicity' => [[['_route' => 'publicity_index', '_controller' => 'App\\Controller\\PublicityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/publicity/new' => [[['_route' => 'publicity_new', '_controller' => 'App\\Controller\\PublicityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session_index', '_controller' => 'App\\Controller\\SessionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/session/new' => [[['_route' => 'session_new', '_controller' => 'App\\Controller\\SessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/candidat/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/formateur/([^/]++)(?'
                    .'|(*:242)'
                    .'|/edit(*:255)'
                    .'|(*:263)'
                .')'
                .'|/publicity/([^/]++)(?'
                    .'|(*:294)'
                    .'|/edit(*:307)'
                    .'|(*:315)'
                .')'
                .'|/session/([^/]++)(?'
                    .'|(*:344)'
                    .'|/edit(*:357)'
                    .'|(*:365)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:391)'
                    .'|/edit(*:404)'
                    .'|(*:412)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'candidat_show', '_controller' => 'App\\Controller\\CandidatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'candidat_edit', '_controller' => 'App\\Controller\\CandidatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'candidat_delete', '_controller' => 'App\\Controller\\CandidatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'formateur_show', '_controller' => 'App\\Controller\\FormateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'formateur_edit', '_controller' => 'App\\Controller\\FormateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'formateur_delete', '_controller' => 'App\\Controller\\FormateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'publicity_show', '_controller' => 'App\\Controller\\PublicityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'publicity_edit', '_controller' => 'App\\Controller\\PublicityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [[['_route' => 'publicity_delete', '_controller' => 'App\\Controller\\PublicityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        344 => [[['_route' => 'session_show', '_controller' => 'App\\Controller\\SessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        357 => [[['_route' => 'session_edit', '_controller' => 'App\\Controller\\SessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [[['_route' => 'session_delete', '_controller' => 'App\\Controller\\SessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        391 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
