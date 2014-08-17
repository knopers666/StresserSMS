<?php
 /**
 * Stresser Service SMS

 * @author  knopers
 * @package Stresser Service SMS
 */

include './configs/config.php';
require './libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->addConfigDir('./configs/langs');
$page = 'index';
//Dodaj później do SQL
$attacks = array("CHARGEN", "UDP", "UDPLAG", "XSYN", "SLOWORIS");
$pages = array('index', 'status', 'tools', 'contact');
$langs = array("PL", "ENG");
if(isset($_GET['p']))
{
	$page = ltrim($_GET['p'], "/");
	$page = (in_array($page, $pages)) ? $page : '404';
}
else
	$smarty->assign('methods', $attacks);
if(isset($_COOKIE['lang']))
	in_array($_COOKIE['lang'], $GLOBALS['langs']) ?  $smarty->assign('lang', strtolower($_COOKIE['lang'])) : $smarty->assign('lang', 'pl');
else
	$smarty->assign('lang', 'pl');
$smarty->display(sprintf('%s.tpl', $page));
