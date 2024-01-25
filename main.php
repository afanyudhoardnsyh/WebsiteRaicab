<?php
error_reporting(0);
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$sid = session_id();
//path
$path_base       = dirname($_SERVER['SCRIPT_FILENAME']) . '/';
$path_common     = $path_base . 'common/';
$path_model      = $path_base . 'model/';
$pat_confiq         = $path_base . 'confiq/';
//utama
$path_controller_utama = $path_base . 'modul/utama/controller/';
$path_view_utama       = $path_base . 'modul/utama/view/';
//beranda
$path_controller_beranda = $path_base . 'modul/beranda/controller/';
$path_view_beranda     = $path_base . 'modul/beranda/view/';
//login
$path_controller_login = $path_base . 'modul/login/controller/';
$path_view_login    = $path_base . 'modul/login/view/';
//login
$path_controller_register = $path_base . 'modul/register/controller/';
$path_view_register    = $path_base . 'modul/register/view/';

require_once $path_common . 'config.php';
require_once $path_common . 'functions.php';
