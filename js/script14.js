function showTable14() {
    var form = $("#table14");
    $.ajax({
        method: "POST",
        url: "index.php?pg=wec&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable14").fadeOut(400, function () {
                $("#showTable14").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}