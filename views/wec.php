<?php
include_once "header_fia.php";
?>
<section>
    <div class="container-fluid">
        <div class="text-center">
            <h1>WEC</h1>
            <h2>WEC World Drivers' Champions (2012 - present)</h2>
            <form method="post" action="" name="table13" id="table13"></form>
            <button type="button" class="btn btn-default" onclick="showTable13()" form="table13">View</button>
            <div id="showTable13"></div>
            <h2>WEC World Manufacturers' Champions (2012 - present)</h2>
            <form method="post" action="" name="table14" id="table14"></form>
            <button type="button" class="btn btn-default" onclick="showTable14()" form="table14">View</button>
            <div id="showTable14"></div>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>