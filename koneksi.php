<?php
$conn_str = "host=john.db.elephantsql.com " .
    "port=5432 " .
    "user=uyofpqwo " .
    "dbname=uyofpqwo " .
    "password=6VNPD_jVamIc0t2P0stywGEY7RzGs1VU ";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>