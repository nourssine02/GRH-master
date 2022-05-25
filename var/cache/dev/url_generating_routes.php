<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'annonces_list' => [[], ['_controller' => 'App\\Controller\\AnnonceController::index'], [], [['text', '/annonces']], [], [], []],
    'annonce_new' => [[], ['_controller' => 'App\\Controller\\AnnonceController::add'], [], [['text', '/annonce/new']], [], [], []],
    'annonce_update' => [['id'], ['_controller' => 'App\\Controller\\AnnonceController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonce/update']], [], [], []],
    'annonce_delete' => [['id'], ['_controller' => 'App\\Controller\\AnnonceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonce/delete']], [], [], []],
    'avance_list' => [[], ['_controller' => 'App\\Controller\\AvanceController::index'], [], [['text', '/avance']], [], [], []],
    'avance_new' => [[], ['_controller' => 'App\\Controller\\AvanceController::add'], [], [['text', '/avance/new']], [], [], []],
    'avance_update' => [['id'], ['_controller' => 'App\\Controller\\AvanceController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/avance/update']], [], [], []],
    'avance_delete' => [['id'], ['_controller' => 'App\\Controller\\AvanceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/avance/delete']], [], [], []],
    'conges_list' => [[], ['_controller' => 'App\\Controller\\CongesController::index'], [], [['text', '/conges']], [], [], []],
    'conges_calendrier' => [[], ['_controller' => 'App\\Controller\\CongesController::view'], [], [['text', '/conges/calendrier']], [], [], []],
    'conges_update' => [['id'], ['_controller' => 'App\\Controller\\CongesController::updateCalendar'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/conges/calendar/update']], [], [], []],
    'conges_new' => [[], ['_controller' => 'App\\Controller\\CongesController::add'], [], [['text', '/conges/new']], [], [], []],
    'conges_updateList' => [['id'], ['_controller' => 'App\\Controller\\CongesController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/conges/update']], [], [], []],
    'conges_delete' => [['id'], ['_controller' => 'App\\Controller\\CongesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/conges/delete']], [], [], []],
    'conges_accepter' => [['id'], ['_controller' => 'App\\Controller\\CongesController::ajax1'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/conges/accepter']], [], [], []],
    'conges_refuser' => [['id'], ['_controller' => 'App\\Controller\\CongesController::ajax2'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/conges/refuser']], [], [], []],
    'dashboard_page' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'departements_list' => [[], ['_controller' => 'App\\Controller\\DashboardController::showD'], [], [['text', '/departement']], [], [], []],
    'departement_new' => [[], ['_controller' => 'App\\Controller\\DashboardController::newD'], [], [['text', '/departement/new']], [], [], []],
    'departement_update' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::updateD'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/departement/update']], [], [], []],
    'departement_delete' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::deleteD'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/departement/delete']], [], [], []],
    'services_list' => [[], ['_controller' => 'App\\Controller\\DashboardController::showS'], [], [['text', '/service']], [], [], []],
    'service_new' => [[], ['_controller' => 'App\\Controller\\DashboardController::newS'], [], [['text', '/service/new']], [], [], []],
    'service_update' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::updateS'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/service/update']], [], [], []],
    'service_delete' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::deleteS'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/service/delete']], [], [], []],
    'employe_list' => [[], ['_controller' => 'App\\Controller\\EmployeController::index'], [], [['text', '/employes']], [], [], []],
    'employe_new' => [[], ['_controller' => 'App\\Controller\\EmployeController::add'], [], [['text', '/employe/new']], [], [], []],
    'employe_update' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employe/update']], [], [], []],
    'employe_delete' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employe/delete']], [], [], []],
    'fiche_paie' => [[], ['_controller' => 'App\\Controller\\FichePaieController::index'], [], [['text', '/fichePaie']], [], [], []],
    'fiche_paie_new' => [[], ['_controller' => 'App\\Controller\\FichePaieController::add'], [], [['text', '/fichePaie/new']], [], [], []],
    'fiche_delete' => [['id'], ['_controller' => 'App\\Controller\\FichePaieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/fichePaie/delete']], [], [], []],
    'imprime' => [['id'], ['_controller' => 'App\\Controller\\FichePaieController::print'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/fichePaie/imprimer']], [], [], []],
    'gestionSupp_list' => [[], ['_controller' => 'App\\Controller\\GestionSupplementaireController::index'], [], [['text', '/gestionSupp']], [], [], []],
    'gestionSupp_new' => [[], ['_controller' => 'App\\Controller\\GestionSupplementaireController::add'], [], [['text', '/gestionSupp/new']], [], [], []],
    'gestionSupp_update' => [['id'], ['_controller' => 'App\\Controller\\GestionSupplementaireController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gestionSupp/update']], [], [], []],
    'gestionSupp_delete' => [['id'], ['_controller' => 'App\\Controller\\GestionSupplementaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/gestionSupp/delete']], [], [], []],
    'mission_list' => [[], ['_controller' => 'App\\Controller\\MissionController::index'], [], [['text', '/mission']], [], [], []],
    'mission_new' => [[], ['_controller' => 'App\\Controller\\MissionController::add'], [], [['text', '/mission/new']], [], [], []],
    'mission_update' => [['id'], ['_controller' => 'App\\Controller\\MissionController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mission/update']], [], [], []],
    'mission_delete' => [['id'], ['_controller' => 'App\\Controller\\MissionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mission/delete']], [], [], []],
    'mission' => [['id'], ['_controller' => 'App\\Controller\\MissionController::ajax'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mission']], [], [], []],
    'pointages_list' => [[], ['_controller' => 'App\\Controller\\PointageController::list'], [], [['text', '/pointage']], [], [], []],
    'pointages_update' => [['id'], ['_controller' => 'App\\Controller\\PointageController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pointage']], [], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil']], [], [], []],
    'profil_update' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::updateProfil'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profil/update']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\RegistrationController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\RegistrationController::logout'], [], [['text', '/logout']], [], [], []],
    'fc_load_events' => [[], ['_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], [], [['text', '/fc-load-events']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
