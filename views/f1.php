<?php
include_once "header_fia.php";
?>
<section>
    <div class="container-fluid">
        <div class="text-center">
            <h1>Formula 1</h1>
            <h2>Formula 1 World Drivers' Champions (1950 - present)</h2>
            <form method="post" action="" name="table1" id="table1"></form>
            <button type="button" class="btn btn-default" onclick="showTable1()" form="table1">View</button>
            <div id="showTable1"></div>
            <h2>Formula 1 World Constructors' Champions (1958 - present)</h2>
            <form method="post" action="" name="table2" id="table2"></form>
            <button type="button" class="btn btn-default" onclick="showTable2()" form="table1">View</button>
            <div id="showTable2"></div>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>