function showTable8() {
    var form = $("#table8");
    $.ajax({
        method: "POST",
        url: "index.php?pg=wrc&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $("#showTable8").fadeOut(400, function () {
                $("#showTable8").html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}