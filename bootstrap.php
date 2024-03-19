<?php
define('_DIR_ROOT', __DIR__);
// handle http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on'){
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
}else{
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
}


$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(_DIR_ROOT));

$web_root = $web_root.$folder;

define('_WEB_ROOT', $web_root);
// end handle http root

require_once('configs/routes.php');
require_once('core/Route.php');
require_once("app/App.php");    //Load App
require_once("core/BaseController.php");    //Load Base Controller


/** 
 * Window -> \
 * Linux + Apache -> /
 * 
 */