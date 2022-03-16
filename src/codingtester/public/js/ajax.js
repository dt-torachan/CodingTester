$(function(){
    $("#do_compile").click(function(){
        return $.ajax({
            url: "https://api.codingtester.local.jp/api/sample/1/test",
            type: 'get',
            dataType: 'json'
        }).done(function (data) {
            alert(JSON.stringify(data));
        }).fail(function (jqXHR, textStatus, error) {
            alert(error);
        });
    })
});
