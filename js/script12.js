function showTable12() {
    var form = $("#table12");
    $.ajax({
        method: "POST",
        url: "index.php?pg=wbwc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable12").fadeOut(400, function () {
                $("#showTable12").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}