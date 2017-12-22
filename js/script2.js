function showTable3() {
    var form = $("#table3");
    $.ajax({
        method: "POST",
        url: "index.php?pg=wc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable3").fadeOut(400, function () {
                $("#showTable3").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}