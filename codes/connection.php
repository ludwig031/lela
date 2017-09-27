<?php
// podaci za bazu
$dbhost = "salonlel_salon";
$dbuser = "salonlel_salon";
$dbpass = "Lela2646096";
$dbname = "salonlel_salon";

// konektiranje na bazu
$db = new Database($dbhost, $dbuser, $dbpass, $dbname);
unset($dbhost, $dbuser, $dbpass, $dbname);
$db->query("SET NAMES utf8");
?>