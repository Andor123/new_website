<?php
include_once "header_fim.php";
?>
<section>
    <div class="container-fluid">
        <div class="text-center">
            <h1>Superbike</h1>
            <h2>Superbike World Riders' Champions (1988 - present)</h2>
            <form method="post" action="" name="table10" id="table10"></form>
            <button type="button" class="btn btn-default" onclick="showTable10()" form="table10">View</button>
            <div id="showTable10"></div>
            <h2>Superbike World Manufacturers' Champions (1988 - present)</h2>
            <form method="post" action="" name="table11" id="table11"></form>
            <button type="button" class="btn btn-default" onclick="showTable11()" form="table11">View</button>
            <div id="showTable11"></div>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>