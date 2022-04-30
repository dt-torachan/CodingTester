$(function(){
    $("#do_compile").click(function(){
        return $.ajax({
            url: "https://api.codingtester.local.jp/api/sample/1/1",
            type: 'post',
            dataType: 'json',
            data: {
                language: $("#language").val(),
                code: $(".ace_text-input").val(),
                input: $("#test-input-value").val(),
            },
        }).done(function (data) {
            // alert(JSON.stringify(data));
            var result = JSON.parse(data);
            alert(result.out);
        }).fail(function (jqXHR, textStatus, error) {
            alert(error);
        });
    })
});
