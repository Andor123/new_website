function showTable17() {
    var form = $("#table17");
    $.ajax({
        method: "POST",
        url: "index.php?pg=u19bwc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable17").fadeOut(400, function () {
                $("#showTable17").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}