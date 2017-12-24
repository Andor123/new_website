function showTable4() {
    var form = $("#table4");
    $.ajax({
        method: "POST",
        url: "index.php?pg=mgp&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable4").fadeOut(400, function () {
                $("#showTable4").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}