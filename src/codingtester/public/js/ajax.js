$(function(){
    $("#do_compile").click(function(){
        return $.ajax({
            url: "https://api.codingtester.local.jp/api/sample/1/test",
            type: 'post',
            dataType: 'json',
            data: {
                language: $("#language").val(),
                code: $(".ace_text-input").val(),
            },
        }).done(function (data) {
            alert(JSON.stringify(data));
        }).fail(function (jqXHR, textStatus, error) {
            alert(error);
        });
    })
});
