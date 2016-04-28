var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e){
    console.log('Connection established');
}
conn.onmessage = function(e){
    $(".contenido").append(e.data+"</br>");
}
$(".principaltable tbody tr").on('click', function(){
    var data = $(this).children("td:nth-child(4)").html();
    $(this).css({
        'border':'2px solid #F5CD43',
        'background': '#F5CD43'
    });
    if($(this).attr('data-selected') != 1){
        $(this).attr('data-selected', 1);
        conn.send(data);
    }
});