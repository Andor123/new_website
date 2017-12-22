<?php
if (isset($_GET["ajax"]) && $_GET["ajax"] == 1) {
    $sql = "SELECT world_cup_year, country_name FROM wc_winners ORDER BY world_cup_year ASC";
    $result = mysqli_query($connection, $sql);

    $html = "";
    $html .= "<br>";
    $html .= "<div class='table-responsive'>";
    $html .= "<table border='1' align='center'>";
    $html .= "<tr>";
    $html .= "<th>World Cup Year</th>";
    $html .= "<th>Country Name</th>";
    $html .= "</tr>";
    while ($row = mysqli_fetch_array($result)) {
        $html .= "<tr>";
        $html .= "<td>" . $row["world_cup_year"] . "</td>";
        $html .= "<td>" . $row["country_name"] . "</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
    $html .= "</div>";
    $html .= "<br>";

    $response = array(
        "status" => "success",
        "html" => $html
    );

    echo json_encode($response);
    exit();
}
include_once "views/wc.php";
?>