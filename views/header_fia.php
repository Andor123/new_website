<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Website</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/script3.js"></script>
    <script src="js/script4.js"></script>
    <script src="js/script5.js"></script>
    <script src="js/script6.js"></script>
    <script src="js/script7.js"></script>
    <script src="js/script8.js"></script>
    <script src="js/script9.js"></script>
    <script src="js/script10.js"></script>
    <script src="js/script11.js"></script>
</head>
<body>

<header>
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">New Website</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav">
                    <?php
                    foreach ($menu_fia as $k => $v) {
                        echo "<li><a href='index.php?pg=$k'>$v</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</header>