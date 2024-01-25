<?PHP
$ip = $_SERVER['REMOTE_ADDR'];
$tanggal = date("Ymd");
$waktu = time();
// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
$s = "SELECT COUNT(ip) as jumip FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'";
$result = $koneksi->query($s);
$data   = $result->fetch_assoc();
// Kalau belum ada, simpan data user tersebut ke database

if ($data['jumip'] == 0) {
    $sql = "INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')";
    $result = $koneksi->query($sql);
} else {
    $sql = "UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'";
    $result = $koneksi->query($sql);
}
?>

<!-- info section starts -->