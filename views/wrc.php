<?php
include_once "header_fia.php";
?>
<section>
    <div class="container-fluid">
        <div class="text-center">
            <h1>WRC</h1>
            <h2>WRC World Drivers' Champions (1977 - present)</h2>
            <form method="post" action="" name="table7" id="table7"></form>
            <button type="button" class="btn btn-default" onclick="showTable7()" form="table7">View</button>
            <div id="showTable7"></div>
            <h2>WRC World Constructors' Champions (1973 - present)</h2>
            <form method="post" action="" name="table8" id="table8"></form>
            <button type="button" class="btn btn-default" onclick="showTable8()" form="table8">View</button>
            <div id="showTable8"></div>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>