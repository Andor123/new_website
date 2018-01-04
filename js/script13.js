function showTable13() {
    var form = $("#table13");
    $.ajax({
        method: "POST",
        url: "index.php?pg=wec&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable13").fadeOut(400, function () {
                $("#showTable13").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}