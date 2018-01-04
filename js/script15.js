function showTable15() {
    var form = $("#table15");
    $.ajax({
        method: "POST",
        url: "index.php?pg=u20wc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable15").fadeOut(400, function () {
                $("#showTable15").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}