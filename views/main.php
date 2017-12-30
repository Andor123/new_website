<?php
include_once "header.php";
?>
<section>
    <div class="jumbotron text-center">
        <div class="container-fluid">
            <h1>Welcome to New Website!</h1>
            <p>We are here to show you the newest things in our world.</p>
            <p><a role="button" class="btn btn-default btn-lg" href="index.php?pg=intro">Go to introduction</a></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h1>Our Themes</h1>
            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-3">
                <div class="center-block">
                    <img src="images/fia.jpg" alt="fia" class="img-responsive img-circle">
                    <h2><a type="button" class="btn btn-default btn-lg" href="index.php?pg=fia">FIA</a></h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-3">
                <div class="center-block">
                    <img src="images/fifa.jpg" alt="fifa" class="img-responsive img-circle">
                    <h2><a type="button" class="btn btn-default btn-lg" href="index.php?pg=fifa">FIFA</a></h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-3">
                <div class="center-block">
                    <img src="images/fim.jpg" alt="fim" class="img-responsive img-circle">
                    <h2><a type="button" class="btn btn-default btn-lg" href="index.php?pg=fim">FIM</a></h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-3">
                <div class="center-block">
                    <img src="images/fiba.jpg" alt="fiba" class="img-responsive img-circle">
                    <h2><a type="button" class="btn btn-default btn-lg" href="index.php?pg=fiba">FIBA</a></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>