function showTable16() {
    var form = $("#table16");
    $.ajax({
        method: "POST",
        url: "index.php?pg=ewc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable16").fadeOut(400, function () {
                $("#showTable16").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}