var conn = new WebSocket('ws://192.168.1.67:8080');
conn.onopen = function(e){
    console.log('Connection established');
}
conn.onmessage = function(e){
    $(".contenido").append(e.data+"</br>");
}
$(".principaltable tbody tr").on('click', function(){
    var data = $(this).children("td:nth-child(4)").html();
    $(this).css('border','2px solid red !important');
    conn.send(data);
});