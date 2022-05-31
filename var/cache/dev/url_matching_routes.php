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
        '/employes/conges' => [[['_route' => 'employes_conges', '_controller' => 'App\\Controller\\CongesController::congesEnCours'], null, null, null, false, false, null]],
        '/dates/calendrier' => [[['_route' => 'dates_conges_calendrier', '_controller' => 'App\\Controller\\CongesController::calendar'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard_page', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/departement' => [[['_route' => 'departements_list', '_controller' => 'App\\Controller\\DashboardController::showD'], null, null, null, false, false, null]],
        '/departement/new' => [[['_route' => 'departement_new', '_controller' => 'App\\Controller\\DashboardController::newD'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'services_list', '_controller' => 'App\\Controller\\DashboardController::showS'], null, null, null, false, false, null]],
        '/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\DashboardController::newS'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'statistiques', '_controller' => 'App\\Controller\\DashboardController::statistiques'], null, null, null, false, false, null]],
        '/dates/conges' => [[['_route' => 'dates_conges_index', '_controller' => 'App\\Controller\\DatesCongesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dates/conges/new' => [[['_route' => 'dates_conges_new', '_controller' => 'App\\Controller\\DatesCongesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documents' => [[['_route' => 'documents', '_controller' => 'App\\Controller\\DocumentsController::index'], null, null, null, false, false, null]],
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
                .'|/d(?'
                    .'|epartement/(?'
                        .'|update/([^/]++)(*:460)'
                        .'|delete/([^/]++)(*:483)'
                    .')'
                    .'|ates/conges/([^/]++)(?'
                        .'|(*:515)'
                        .'|/edit(*:528)'
                        .'|(*:536)'
                    .')'
                .')'
                .'|/service/(?'
                    .'|update/([^/]++)(*:573)'
                    .'|delete/([^/]++)(*:596)'
                .')'
                .'|/employe/(?'
                    .'|update/([^/]++)(*:632)'
                    .'|delete/([^/]++)(*:655)'
                .')'
                .'|/fichePaie/(?'
                    .'|delete/([^/]++)(*:693)'
                    .'|imprimer/([^/]++)(*:718)'
                .')'
                .'|/gestionSupp/(?'
                    .'|update/([^/]++)(*:758)'
                    .'|delete/([^/]++)(*:781)'
                .')'
                .'|/mission/(?'
                    .'|update/([^/]++)(*:817)'
                    .'|delete/([^/]++)(*:840)'
                    .'|([^/]++)(*:856)'
                .')'
                .'|/p(?'
                    .'|ointage/(?'
                        .'|([^/]++)(*:889)'
                        .'|new(*:900)'
                    .')'
                    .'|rofil/update/([^/]++)(*:930)'
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
        460 => [[['_route' => 'departement_update', '_controller' => 'App\\Controller\\DashboardController::updateD'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        483 => [[['_route' => 'departement_delete', '_controller' => 'App\\Controller\\DashboardController::deleteD'], ['id'], null, null, false, true, null]],
        515 => [[['_route' => 'dates_conges_show', '_controller' => 'App\\Controller\\DatesCongesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        528 => [[['_route' => 'dates_conges_edit', '_controller' => 'App\\Controller\\DatesCongesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        536 => [[['_route' => 'dates_conges_delete', '_controller' => 'App\\Controller\\DatesCongesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        573 => [[['_route' => 'service_update', '_controller' => 'App\\Controller\\DashboardController::updateS'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        596 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\DashboardController::deleteS'], ['id'], null, null, false, true, null]],
        632 => [[['_route' => 'employe_update', '_controller' => 'App\\Controller\\EmployeController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        655 => [[['_route' => 'employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], null, null, false, true, null]],
        693 => [[['_route' => 'fiche_delete', '_controller' => 'App\\Controller\\FichePaieController::delete'], ['id'], null, null, false, true, null]],
        718 => [[['_route' => 'imprime', '_controller' => 'App\\Controller\\FichePaieController::print'], ['id'], null, null, false, true, null]],
        758 => [[['_route' => 'gestionSupp_update', '_controller' => 'App\\Controller\\GestionSupplementaireController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        781 => [[['_route' => 'gestionSupp_delete', '_controller' => 'App\\Controller\\GestionSupplementaireController::delete'], ['id'], null, null, false, true, null]],
        817 => [[['_route' => 'mission_update', '_controller' => 'App\\Controller\\MissionController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        840 => [[['_route' => 'mission_delete', '_controller' => 'App\\Controller\\MissionController::delete'], ['id'], null, null, false, true, null]],
        856 => [[['_route' => 'mission', '_controller' => 'App\\Controller\\MissionController::ajax'], ['id'], null, null, false, true, null]],
        889 => [[['_route' => 'pointages_update', '_controller' => 'App\\Controller\\PointageController::update'], ['id'], null, null, false, true, null]],
        900 => [[['_route' => 'pointage_new', '_controller' => 'App\\Controller\\PointageController::add'], [], null, null, false, false, null]],
        930 => [
            [['_route' => 'profil_update', '_controller' => 'App\\Controller\\ProfilController::updateProfil'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
