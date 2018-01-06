<?php
if (isset($_GET["ajax"]) && $_GET["ajax"] == 1) {
    $sql = "SELECT championship_year, rider_names, rider_countries, team_name, team_country FROM ewc_wrc ORDER BY championship_year ASC";
    $result = mysqli_query($connection, $sql);

    $html = "";
    $html .= "<br>";
    $html .= "<div class='table-responsive'>";
    $html .= "<table border='1' align='center'>";
    $html .= "<tr>";
    $html .= "<th>Championship Year</th>";
    $html .= "<th>Rider Names</th>";
    $html .= "<th>Rider Countries</th>";
    $html .= "<th>Team Name</th>";
    $html .= "<th>Team Country</th>";
    $html .= "</tr>";
    while ($row = mysqli_fetch_array($result)) {
        $html .= "<tr>";
        $html .= "<td>" . $row["championship_year"] . "</td>";
        $html .= "<td>" . $row["rider_names"] . "</td>";
        $html .= "<td>" . $row["rider_countries"] . "</td>";
        $html .= "<td>" . $row["team_name"] . "</td>";
        $html .= "<td>" . $row["team_country"] . "</td>";
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
include_once "views/ewc.php";
?>