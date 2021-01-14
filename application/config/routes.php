<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Home/loadHome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'C_Home/loadHome';
$route['heroes'] = 'C_Home/loadHero';
$route['about'] = 'C_Home/loadAbout';

$route['searchByID'] = 'C_Statistic/findUserByID';

$route['searchByPersonaName']= 'C_Search_by_name/loadSearchByName';
$route['selectSteamID'] = 'C_Search_by_name/findUserByPersonaName';

$route['matches'] = 'C_Statistic/loadMatches';
$route['changeID'] = 'C_Statistic/changeID';

$route['stats'] = 'C_Statistic/loadStats';
$route['compareByID'] = 'C_Statistic/findComparatorByID';
$route['compareByPersonaName'] = 'C_Statistic/loadComparationStatsByName';