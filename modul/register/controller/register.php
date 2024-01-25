<?php
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mode           = trim($_POST['cari']);

// page properties
$page_id    = 'home';
$page_title = 'Selamat datang di Raicab';

// template
require_once $path_view_utama . 'headerregister.php';
require_once $path_view_register . 'register.php';
require_once $path_view_utama . 'footer.php';
