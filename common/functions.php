<?php

function formatTgl($date)
{
	$months = array('', 'JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC');
	$date = explode('-', $date);
	$date[1] = (int) $date[1];
	$date[2] = (int) $date[2];
	return $date[2] . ' ' . $months[$date[1]] . ' ' . $date[0];
}

function getBulan($bln)
{
	switch ($bln) {
		case 1:
			return "JANUARI";
			break;
		case 2:
			return "FEBRUARI";
			break;
		case 3:
			return "MARET";
			break;
		case 4:
			return "APRIL";
			break;
		case 5:
			return "MEI";
			break;
		case 6:
			return "JUNI";
			break;
		case 7:
			return "JULI";
			break;
		case 8:
			return "AGUSTUS";
			break;
		case 9:
			return "SEPTEMBER";
			break;
		case 10:
			return "OKTOBER";
			break;
		case 11:
			return "NOVEMBER";
			break;
		case 12:
			return "DESEMBER";
			break;
	}
}

function tgl_indo($tgl)
{
	$tanggal = substr($tgl, 8, 2);
	$bulan = getBulan(substr($tgl, 5, 2));
	$tahun = substr($tgl, 0, 4);
	return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
