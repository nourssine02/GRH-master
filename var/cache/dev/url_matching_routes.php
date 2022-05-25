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
        '/annonces' => [[['_route' => 'annonces_list', '_controller' => 'App\\Controller\\AnnonceController::index'], null, null, null, false, false, null]],
        '/annonce/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::add'], null, null, null, false, false, null]],
        '/avance' => [[['_route' => 'avance_list', '_controller' => 'App\\Controller\\AvanceController::index'], null, null, null, false, false, null]],
        '/avance/new' => [[['_route' => 'avance_new', '_controller' => 'App\\Controller\\AvanceController::add'], null, null, null, false, false, null]],
        '/conges' => [[['_route' => 'conges_list', '_controller' => 'App\\Controller\\CongesController::index'], null, null, null, false, false, null]],
        '/conges/calendrier' => [[['_route' => 'conges_calendrier', '_controller' => 'App\\Controller\\CongesController::view'], null, null, null, false, false, null]],
        '/conges/new' => [[['_route' => 'conges_new', '_controller' => 'App\\Controller\\CongesController::add'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard_page', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/departement' => [[['_route' => 'departements_list', '_controller' => 'App\\Controller\\DashboardController::showD'], null, null, null, false, false, null]],
        '/departement/new' => [[['_route' => 'departement_new', '_controller' => 'App\\Controller\\DashboardController::newD'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'services_list', '_controller' => 'App\\Controller\\DashboardController::showS'], null, null, null, false, false, null]],
        '/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\DashboardController::newS'], null, null, null, false, false, null]],
        '/employes' => [[['_route' => 'employe_list', '_controller' => 'App\\Controller\\EmployeController::index'], null, null, null, false, false, null]],
        '/employe/new' => [[['_route' => 'employe_new', '_controller' => 'App\\Controller\\EmployeController::add'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/fichePaie' => [[['_route' => 'fiche_paie', '_controller' => 'App\\Controller\\FichePaieController::index'], null, null, null, false, false, null]],
        '/fichePaie/new' => [[['_route' => 'fiche_paie_new', '_controller' => 'App\\Controller\\FichePaieController::add'], null, null, null, false, false, null]],
        '/gestionSupp' => [[['_route' => 'gestionSupp_list', '_controller' => 'App\\Controller\\GestionSupplementaireController::index'], null, null, null, false, false, null]],
        '/gestionSupp/new' => [[['_route' => 'gestionSupp_new', '_controller' => 'App\\Controller\\GestionSupplementaireController::add'], null, null, null, false, false, null]],
        '/mission' => [[['_route' => 'mission_list', '_controller' => 'App\\Controller\\MissionController::index'], null, null, null, false, false, null]],
        '/mission/new' => [[['_route' => 'mission_new', '_controller' => 'App\\Controller\\MissionController::add'], null, null, null, false, false, null]],
        '/pointage' => [[['_route' => 'pointages_list', '_controller' => 'App\\Controller\\PointageController::list'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\RegistrationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\RegistrationController::logout'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|nnonce/(?'
                        .'|update/([^/]++)(*:198)'
                        .'|delete/([^/]++)(*:221)'
                    .')'
                    .'|vance/(?'
                        .'|update/([^/]++)(*:254)'
                        .'|delete/([^/]++)(*:277)'
                    .')'
                .')'
                .'|/conges/(?'
                    .'|calendar/update/([^/]++)(*:322)'
                    .'|update/([^/]++)(*:345)'
                    .'|delete/([^/]++)(*:368)'
                    .'|accepter/([^/]++)(*:393)'
                    .'|refuser/([^/]++)(*:417)'
                .')'
                .'|/departement/(?'
                    .'|update/([^/]++)(*:457)'
                    .'|delete/([^/]++)(*:480)'
                .')'
                .'|/service/(?'
                    .'|update/([^/]++)(*:516)'
                    .'|delete/([^/]++)(*:539)'
                .')'
                .'|/employe/(?'
                    .'|update/([^/]++)(*:575)'
                    .'|delete/([^/]++)(*:598)'
                .')'
                .'|/fichePaie/(?'
                    .'|delete/([^/]++)(*:636)'
                    .'|imprimer/([^/]++)(*:661)'
                .')'
                .'|/gestionSupp/(?'
                    .'|update/([^/]++)(*:701)'
                    .'|delete/([^/]++)(*:724)'
                .')'
                .'|/mission/(?'
                    .'|update/([^/]++)(*:760)'
                    .'|delete/([^/]++)(*:783)'
                    .'|([^/]++)(*:799)'
                .')'
                .'|/p(?'
                    .'|ointage/([^/]++)(*:829)'
                    .'|rofil/update/([^/]++)(*:858)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        198 => [[['_route' => 'annonce_update', '_controller' => 'App\\Controller\\AnnonceController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        221 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'avance_update', '_controller' => 'App\\Controller\\AvanceController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        277 => [[['_route' => 'avance_delete', '_controller' => 'App\\Controller\\AvanceController::delete'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'conges_update', '_controller' => 'App\\Controller\\CongesController::updateCalendar'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'conges_updateList', '_controller' => 'App\\Controller\\CongesController::update'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'conges_delete', '_controller' => 'App\\Controller\\CongesController::delete'], ['id'], null, null, false, true, null]],
        393 => [[['_route' => 'conges_accepter', '_controller' => 'App\\Controller\\CongesController::ajax1'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'conges_refuser', '_controller' => 'App\\Controller\\CongesController::ajax2'], ['id'], null, null, false, true, null]],
        457 => [[['_route' => 'departement_update', '_controller' => 'App\\Controller\\DashboardController::updateD'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        480 => [[['_route' => 'departement_delete', '_controller' => 'App\\Controller\\DashboardController::deleteD'], ['id'], null, null, false, true, null]],
        516 => [[['_route' => 'service_update', '_controller' => 'App\\Controller\\DashboardController::updateS'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        539 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\DashboardController::deleteS'], ['id'], null, null, false, true, null]],
        575 => [[['_route' => 'employe_update', '_controller' => 'App\\Controller\\EmployeController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        598 => [[['_route' => 'employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], null, null, false, true, null]],
        636 => [[['_route' => 'fiche_delete', '_controller' => 'App\\Controller\\FichePaieController::delete'], ['id'], null, null, false, true, null]],
        661 => [[['_route' => 'imprime', '_controller' => 'App\\Controller\\FichePaieController::print'], ['id'], null, null, false, true, null]],
        701 => [[['_route' => 'gestionSupp_update', '_controller' => 'App\\Controller\\GestionSupplementaireController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        724 => [[['_route' => 'gestionSupp_delete', '_controller' => 'App\\Controller\\GestionSupplementaireController::delete'], ['id'], null, null, false, true, null]],
        760 => [[['_route' => 'mission_update', '_controller' => 'App\\Controller\\MissionController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        783 => [[['_route' => 'mission_delete', '_controller' => 'App\\Controller\\MissionController::delete'], ['id'], null, null, false, true, null]],
        799 => [[['_route' => 'mission', '_controller' => 'App\\Controller\\MissionController::ajax'], ['id'], null, null, false, true, null]],
        829 => [[['_route' => 'pointages_update', '_controller' => 'App\\Controller\\PointageController::update'], ['id'], null, null, false, true, null]],
        858 => [
            [['_route' => 'profil_update', '_controller' => 'App\\Controller\\ProfilController::updateProfil'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
