<?php
date_default_timezone_set('Asia/Jakarta');
$seminggu         = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hari             = date("w");
$hari_ini         = $seminggu[$hari];

$tgl_sekarang = date("Y-m-d");
$tgl_skrg     = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");

$nama_bln = array(
    "01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei",
    "06" => "Juni", "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember"
);
