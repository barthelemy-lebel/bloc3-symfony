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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|doc(?'
                                .'|s(?:\\.([^/]++))?(*:114)'
                                .'|umentss(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:158)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:184)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:222)'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:267)'
                                .'|lients(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:310)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:336)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:374)'
                                    .')'
                                .')'
                            .')'
                            .'|errors/([^/]++)(?'
                                .'|(*:403)'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:441)'
                            .')'
                            .'|a(?'
                                .'|dmins(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:488)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:514)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:552)'
                                    .')'
                                .')'
                                .'|nnonces(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:598)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:624)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:662)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/([^/]++)(*:688)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:728)'
                    .'|wdt/([^/]++)(*:748)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:790)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:827)'
                                .'|router(*:841)'
                                .'|exception(?'
                                    .'|(*:861)'
                                    .'|\\.css(*:874)'
                                .')'
                            .')'
                            .'|(*:884)'
                        .')'
                    .')'
                .')'
                .'|/client/([^/]++)(*:911)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        114 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        158 => [[['_route' => '_api_/documentss/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Documents', '_api_operation_name' => '_api_/documentss/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        184 => [
            [['_route' => '_api_/documentss{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Documents', '_api_operation_name' => '_api_/documentss{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/documentss{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Documents', '_api_operation_name' => '_api_/documentss{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        222 => [
            [['_route' => '_api_/documentss/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Documents', '_api_operation_name' => '_api_/documentss/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/documentss/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Documents', '_api_operation_name' => '_api_/documentss/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/documentss/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Documents', '_api_operation_name' => '_api_/documentss/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        267 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        310 => [[['_route' => '_api_/clients/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        336 => [
            [['_route' => '_api_/clients{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/clients{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        374 => [
            [['_route' => '_api_/clients/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        403 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        441 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        488 => [[['_route' => '_api_/admins/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Admin', '_api_operation_name' => '_api_/admins/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        514 => [
            [['_route' => '_api_/admins{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Admin', '_api_operation_name' => '_api_/admins{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/admins{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Admin', '_api_operation_name' => '_api_/admins{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        552 => [
            [['_route' => '_api_/admins/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Admin', '_api_operation_name' => '_api_/admins/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/admins/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Admin', '_api_operation_name' => '_api_/admins/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/admins/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Admin', '_api_operation_name' => '_api_/admins/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        598 => [[['_route' => '_api_/annonces/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Annonce', '_api_operation_name' => '_api_/annonces/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        624 => [
            [['_route' => '_api_/annonces{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Annonce', '_api_operation_name' => '_api_/annonces{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/annonces{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Annonce', '_api_operation_name' => '_api_/annonces{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        662 => [
            [['_route' => '_api_/annonces/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Annonce', '_api_operation_name' => '_api_/annonces/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/annonces/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Annonce', '_api_operation_name' => '_api_/annonces/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/annonces/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Annonce', '_api_operation_name' => '_api_/annonces/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        688 => [[['_route' => 'get_admin_by_email', '_controller' => 'App\\Controller\\AdminController::getAdminByEmail'], ['email'], ['GET' => 0], null, false, true, null]],
        728 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        748 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        790 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        827 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        841 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        861 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        874 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        884 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        911 => [
            [['_route' => 'get_client_by_email', '_controller' => 'App\\Controller\\ClientController::getClientByEmail'], ['email'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
