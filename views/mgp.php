<?php
include_once "header_fim.php";
?>
<section>
    <div class="container-fluid">
        <div class="text-center">
            <h1>MotoGP</h1>
            <h2>MotoGP World Riders' Championship (1949 - present)</h2>
            <form method="post" action="" name="table4" id="table4"></form>
            <button type="button" class="btn btn-default" onclick="showTable4()" form="table4">View</button>
            <div id="showTable4"></div>
            <h2>MotoGP World Constructors' Championship (1949 - present)</h2>
            <form method="post" action="" name="table5" id="table5"></form>
            <button type="button" class="btn btn-default" onclick="showTable5()" form="table5">View</button>
            <div id="showTable5"></div>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>