<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "new_website");

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($connection, "SET NAMES utf8") or die(mysqli_error($connection));
mysqli_query($connection, "SET CHARACTER SET utf8") or die(mysqli_error($connection));
mysqli_query($connection, "SET COLLATION_CONNECTION='utf8_general_ci'") or die(mysqli_error($connection));

$menu = array(
    "main" => "Main",
    "intro" => "Introduction"
);

$menu_themes = array(
    "fia" => "FIA",
    "fifa" => "FIFA",
    "fim" => "FIM",
    "fiba" => "FIBA"
);

$menu_fia = array(
    "f1" => "Formula 1",
    "wrc" => "WRC",
    "wec" => "WEC"
);

$menu_fifa = array(
    "wc" => "World Cup",
    "wwc" => "Women's World Cup",
    "u20wc" => "U-20 World Cup"
);

$menu_fim = array(
    "mgp" => "MotoGP",
    "sbk" => "Superbike"
);

$menu_fiba = array(
    "bwc" => "Basketball World Cup",
    "wbwc" => "Women's Basketball World Cup"
);
?>