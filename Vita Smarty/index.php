<?php
//init
define('ABS_PATH_CSS','css/');
define('ABS_PATH_JS','js/');
define('ABS_PATH_MEDIA','media/');
define('SMARTY_DIR', '/users/tombit/www/libs/php/smarty-3.1.23/libs/');
define('SMARTY_DATA', '/users/tombit/www/smarty/vitaSmarty/');
define('SMARTY_TEMPLATE_DIR', SMARTY_DATA . 'templates/');
define('SMARTY_TEMPLATE_FILE_EXT', '.tpl');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

//set dir for smarty-data
$smarty->template_dir = SMARTY_DATA . 'templates/';
$smarty->compile_dir = SMARTY_DATA . 'templates_c/';
$smarty->config_dir = SMARTY_DATA . 'configs/';
$smarty->cache_dir = SMARTY_DATA . 'cache/';

//some application-logic
if(empty($_GET['site'])){
	$var_content = 'home';
} elseif (!empty($_GET['site'])) {
	$var_content = $_GET['site'];
}

$var_content_file = SMARTY_TEMPLATE_DIR . $var_content . SMARTY_TEMPLATE_FILE_EXT;		

if(!file_exists($var_content_file)){
	$var_content = 'home';
}

//set variable-values
$smarty->assign('abs_path_css', ABS_PATH_CSS);
$smarty->assign('abs_path_js', ABS_PATH_JS);
$smarty->assign('abs_path_media', ABS_PATH_MEDIA);
$smarty->assign('head','head' . SMARTY_TEMPLATE_FILE_EXT);
$smarty->assign('header','header' . SMARTY_TEMPLATE_FILE_EXT);
$smarty->assign('footer','footer' . SMARTY_TEMPLATE_FILE_EXT);
$smarty->assign('navigation','navigation' . SMARTY_TEMPLATE_FILE_EXT);
$smarty->assign('content', $var_content . SMARTY_TEMPLATE_FILE_EXT);
$smarty->assign('contactEmail', 'ftleven@gmx.de');
$smarty->assign('contactIcon', ABS_PATH_MEDIA. 'email.png');

//smarty debug-mode
//$smarty->debugging = true;

//display template
$smarty->display('index.tpl');
?>