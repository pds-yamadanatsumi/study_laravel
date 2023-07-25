$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $("[name='csrf-token']").attr("content") },
})
$('#action').on('click', function(){
    name = $('input[name="name"]').val();
    $.ajax({
        url: "/purchase",
        method: "POST",
        data: { name : name },
        dataType: "json",
    }).done(function(res){
            console.log(res);
            $('ul').append('<li>'+ res.name + '</li>');
    }).fail(function(err){
        console.log(err);
        console.log('通信の失敗をしました');
    });
});