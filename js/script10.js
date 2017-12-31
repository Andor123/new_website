function showTable10() {
    var form = $("#table10");
    $.ajax({
        method: "POST",
        url: "index.php?pg=sbk&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable10").fadeOut(400, function () {
                $("#showTable10").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}