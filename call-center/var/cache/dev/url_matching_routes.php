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
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/ticket' => [[['_route' => 'ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ticket/new' => [[['_route' => 'ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ticket/deAssign' => [[['_route' => 'ticket_deAssign', '_controller' => 'App\\Controller\\TicketController::deAssignAll'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/comment/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:255)'
                .'|/ticket/([^/]++)(?'
                    .'|(*:282)'
                    .'|/(?'
                        .'|c(?'
                            .'|lose(*:302)'
                            .'|omment(*:316)'
                        .')'
                        .'|e(?'
                            .'|scalate(*:336)'
                            .'|dit(*:347)'
                        .')'
                        .'|re(?'
                            .'|assign(*:367)'
                            .'|open(*:379)'
                            .'|spond(*:392)'
                        .')'
                        .'|wontfix(*:408)'
                        .'|priority(*:424)'
                        .'|([^/]++)(*:440)'
                    .')'
                    .'|(*:449)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:475)'
                    .'|/edit(*:488)'
                    .'|(*:496)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        255 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        282 => [[['_route' => 'ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'ticket_close', '_controller' => 'App\\Controller\\TicketController::close'], ['id'], ['GET' => 0], null, false, false, null]],
        316 => [[['_route' => 'ticket_comment', '_controller' => 'App\\Controller\\TicketController::addComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        336 => [[['_route' => 'ticket_escalate', '_controller' => 'App\\Controller\\TicketController::escalate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        347 => [[['_route' => 'ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        367 => [[['_route' => 'ticket_reassign', '_controller' => 'App\\Controller\\TicketController::reassign'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        379 => [[['_route' => 'ticket_reopen', '_controller' => 'App\\Controller\\TicketController::reopen'], ['id'], ['GET' => 0], null, false, false, null]],
        392 => [[['_route' => 'ticket_respond', '_controller' => 'App\\Controller\\TicketController::respond'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        408 => [[['_route' => 'ticket_wontfix', '_controller' => 'App\\Controller\\TicketController::wontfix'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        424 => [[['_route' => 'ticket_priority', '_controller' => 'App\\Controller\\TicketController::priority'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'ticket_assign', '_controller' => 'App\\Controller\\TicketController::assignTicket'], ['id', 'user_id'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => 'ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        475 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        496 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
