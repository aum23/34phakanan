<?php

$severname = "localhost";
$username = "root";
$userpass = "";
$dbname = "post_office";

try {
$dbcon = new PDO ("mysql:host=$severname;dbname=$dbname",$username,
$userpass);

$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOEexception $s) {
echo "Faild to connect to database" . $e->getmessage();
}
?>