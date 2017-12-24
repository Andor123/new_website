function showTable6() {
    var form = $("#table6");
    $.ajax({
        method: "POST",
        url: "index.php?pg=bwc&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable6").fadeOut(400, function () {
                $("#showTable6").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}