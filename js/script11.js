function showTable11() {
    var form = $("#table11");
    $.ajax({
        method: "POST",
        url: "index.php?pg=sbk&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable11").fadeOut(400, function () {
                $("#showTable11").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}