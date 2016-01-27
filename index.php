<?php
/**
 * Created by Ye Quan Bao
 * Date: 2016/1/27
 * Time: 14:38
 * Version :v1.2
 */
defined('XIAOGU_PATH')   or define('XIAOGU_PATH',     __DIR__.'/');
defined('LIB_PATH')   or define('LIB_PATH',     XIAOGU_PATH.'/Xiaogu/');
defined('CORE_PATH')   or define('CORE_PATH',     LIB_PATH.'/Library/');
defined('APP_DEBUG')   or define('APP_DEBUG',     true);
defined('EXT')   or define('EXT',     '.class.php');
defined('APP_PATH')     or define('APP_PATH',       dirname($_SERVER['SCRIPT_FILENAME']).'/');
require CORE_PATH."Xiaogu/Start.php";
\Xiaogu\Start::start();
$m = M("Ad");
$d=  $m->select();
print_r($d);
