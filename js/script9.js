function showTable9() {
    var form = $("#table9");
    $.ajax({
        method: "POST",
        url: "index.php?pg=wwc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable9").fadeOut(400, function () {
                $("#showTable9").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}