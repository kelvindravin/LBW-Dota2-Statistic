<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Home/loadHome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'C_Home/loadHome';
$route['heroes'] = 'C_Home/loadHero';

$route['searchByID'] = 'C_Statistic/findUserByID';
$route['changeID'] = 'C_Statistic/changeID';
$route['searchByPersonaName']= 'C_Search_by_name/index';
$route['matches'] = 'C_Statistic/loadMatches';
