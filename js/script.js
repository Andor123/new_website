function showTable1() {
    var form = $("#table1");
    $.ajax({
        method: "POST",
        url: "index.php?pg=f1&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable1").fadeOut(400, function () {
                $("#showTable1").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}

function showTable2() {
    var form = $("#table2");
    $.ajax({
        method: "POST",
        url: "index.php?pg=f1&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable2").fadeOut(400, function () {
                $("#showTable2").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}