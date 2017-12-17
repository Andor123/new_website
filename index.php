<?php
header("Content-type: text/html");
ini_set("display_errors", "1");
error_reporting(E_ALL);
date_default_timezone_set("Europe/Belgrade");

require "config.php";

$pg= "main";
if (isset($_GET["pg"]) && $_GET["pg"] != "") {
    $pg = $_GET["pg"];
}

include_once "modules/" . $pg . ".php";
?>