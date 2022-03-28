<?php
$conn_string = "host=satao.db.elephantsql.com port=5432 " . 
    "dbname=uyofpqwo user=uyofpqwo " .
    "password=6VNPD_jVamIc0t2P0stywGEY7RzGs1VU";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi DB Tersambung";
} else {
    echo "Koneksi DB GAGAL";
}
?>