<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::');
$routes->get('login','Home::login');
$routes->match(['get','post'], 'login','Home::login');
$routes->match(['get','post'], 'servicelist','Admin::servicelist');
$routes->match(['get','post'], 'deleteservice/(:num)','Admin::deleteservice/$1');
$routes->match(['get','post'], 'editservice/(:num)','Admin::editservice/$1');
$routes->match(['get','post'], 'addservice','Admin::addservice');
$routes->post('fetch_product', 'fetch_product::index');
$routes->match(['get','post'], 'book','Admin::book');
$routes->match(['get','post'], 'categorylist','Admin::categorylist');
$routes->match(['get','post'], 'addgst','Admin::addgst');
$routes->match(['get','post'], 'gstlist','Admin::gstlist');
$routes->match(['get','post'], 'editcategory/(:num)','Admin::editcategory/$1');
$routes->match(['get','post'], 'deletecategory/(:num)','Admin::deletecategory/$1');
$routes->match(['get','post'], 'editgst/(:num)','Admin::editgst/$1');
$routes->match(['get','post'], 'deletegst/(:num)','Admin::deletegst/$1');
$routes->match(['get','post'], 'showtotalorders/(:num)','Admin::showtotalorders/$1');
$routes->match(['get','post'], 'showorders','Admin::showorders');
$routes->match(['get','post'], 'bill','Admin::bill');
$routes->match(['get','post'], 'fetch_product','Admin::fetch_product');
$routes->match(['get','post'], 'client', 'Admin::client');
$routes->match(['get','post'], 'deleteclient/(:num)','Admin::deleteclient/$1');
$routes->match(['get','post'], 'editclient/(:num)','Admin::editclient/$1');
$routes->match(['get','post'], 'clientlist','Admin::clientlist');
$routes->match(['get','post'], 'categorylist','Admin::categorylist');
$routes->match(['get','post'], 'billview/(:num)','Admin::billview/$1');
$routes->match(['get','post'], 'addcategory','Admin::addcategory');
$routes->match(['get','post'], 'client_save','Admin::client_save');
$routes->match(['get','post'], 'bokinglist','Admin::bokinglist');
$routes->match(['get','post'], 'customerorderlist/(:num)','Admin::customerorderlist/$1');
$routes->match(['get','post'], 'addcustomer','Admin::addcustomer');
$routes->match(['get','post'], 'updatestatus','Admin::updatestatus');
$routes->match(['get','post'], 'deletebookingorder/(:num)','Admin::deletebookingorder/$1');
$routes->match(['get','post'], 'orderlist/(:num)','Admin::orderlist/$1');
$routes->match(['get','post'], 'list/(:num)','Admin::list/$1');
$routes->match(['get','post'], 'logout','Admin::logout');
$routes->match(['get','post'], 'imageall/(:num)','Admin::imageall/$1');
$routes->match(['get','post'], 'sub_services/(:num)/(:num)','Admin::sub_services/$1/$2');
$routes->match(['get','post'], 'services/(:num)','Admin::services/$1');
$routes->match(['get','post'], 'save_serice','Admin::save_serice');
$routes->match(['get','post'], 'services_list/(:num)','Admin::services_list/$1');
$routes->match(['get','post'], 'deleteorder/(:num)/(:num)','Admin::deleteorder/$1/$2');
$routes->match(['get','post'], 'editbooking/(:num)/','Admin::editbooking/$1');
$routes->match(['get','post'], 'deleteservices/(:num)/','Admin::deleteservices/$1');
$routes->match(['get','post'], 'editorderlist/(:num)','Admin::editorderlist/$1');
$routes->match(['get','post'], 'deleteorderBookig/(:num)/(:num)','Admin::deleteorderBookig/$1/$2');
$routes->match(['get','post'], 'this_month_order','Admin::this_month_order');
$routes->match(['get','post'], 'next_month_order','Admin::next_month_order');
$routes->match(['get','post'], 'Search','Admin::Search');


$routes->setAutoRoute(true);
