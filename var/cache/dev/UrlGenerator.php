<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'candidat_index' => [[], ['_controller' => 'App\\Controller\\CandidatController::index'], [], [['text', '/candidat/']], [], []],
    'candidat_new' => [[], ['_controller' => 'App\\Controller\\CandidatController::new'], [], [['text', '/candidat/new']], [], []],
    'candidat_show' => [['id'], ['_controller' => 'App\\Controller\\CandidatController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/candidat']], [], []],
    'candidat_edit' => [['id'], ['_controller' => 'App\\Controller\\CandidatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/candidat']], [], []],
    'candidat_delete' => [['id'], ['_controller' => 'App\\Controller\\CandidatController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/candidat']], [], []],
    'formateur_index' => [[], ['_controller' => 'App\\Controller\\FormateurController::index'], [], [['text', '/formateur/']], [], []],
    'formateur_new' => [[], ['_controller' => 'App\\Controller\\FormateurController::new'], [], [['text', '/formateur/new']], [], []],
    'formateur_show' => [['id'], ['_controller' => 'App\\Controller\\FormateurController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/formateur']], [], []],
    'formateur_edit' => [['id'], ['_controller' => 'App\\Controller\\FormateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/formateur']], [], []],
    'formateur_delete' => [['id'], ['_controller' => 'App\\Controller\\FormateurController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/formateur']], [], []],
    'publicity_index' => [[], ['_controller' => 'App\\Controller\\PublicityController::index'], [], [['text', '/publicity/']], [], []],
    'publicity_new' => [[], ['_controller' => 'App\\Controller\\PublicityController::new'], [], [['text', '/publicity/new']], [], []],
    'publicity_show' => [['id'], ['_controller' => 'App\\Controller\\PublicityController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/publicity']], [], []],
    'publicity_edit' => [['id'], ['_controller' => 'App\\Controller\\PublicityController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/publicity']], [], []],
    'publicity_delete' => [['id'], ['_controller' => 'App\\Controller\\PublicityController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/publicity']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'session_index' => [[], ['_controller' => 'App\\Controller\\SessionController::index'], [], [['text', '/session/']], [], []],
    'session_new' => [[], ['_controller' => 'App\\Controller\\SessionController::new'], [], [['text', '/session/new']], [], []],
    'session_show' => [['id'], ['_controller' => 'App\\Controller\\SessionController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/session']], [], []],
    'session_edit' => [['id'], ['_controller' => 'App\\Controller\\SessionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/session']], [], []],
    'session_delete' => [['id'], ['_controller' => 'App\\Controller\\SessionController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/session']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
];
