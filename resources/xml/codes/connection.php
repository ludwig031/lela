<?php
// podaci za bazu
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "salon";

// konektiranje na bazu
$db = new Database($dbhost, $dbuser, $dbpass, $dbname);
unset($dbhost, $dbuser, $dbpass, $dbname);
$db->query("SET NAMES utf8");
?>