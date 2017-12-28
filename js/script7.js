function showTable7() {
    var form = $("#table7");
    $.ajax({
        method: "POST",
        url: "index.php?pg=wrc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable7").fadeOut(400, function () {
                $("#showTable7").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}