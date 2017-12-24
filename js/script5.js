function showTable5() {
    var form = $("#table5");
    $.ajax({
        method: "POST",
        url: "index.php?pg=mgp&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable5").fadeOut(400, function () {
                $("#showTable5").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}