<!DOCTYPE html>
<html>
    <head>
        <title>RealTime - App</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .content {
                text-align: center;
                display: inline-block;
            }
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Realtime App</div>
                <div class="row" style="display: flex;justify-content: center;">
                    <div class="container">
                        <input type="text" id="cliente" placeholder="Enter client name" style="width: 200px !important; padding: 10px"><br>
                        <input type="text" id="usuario" placeholder="Enter your name" style="width: 200px !important; padding: 10px"><br>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Message" style="width: 200px !important; padding: 10px; "></textarea>
                    </div>
                </div>
                <button onclick="send();">Send</button>
            </div>
        </div>
    <script>
        var conn = new WebSocket('ws://192.168.1.65:8080');
        conn.onopen = function(e){
            console.log('Connection established');
        }
        conn.onmessage = function(e){
            console.log($("#cliente").val() + " => " + e.data);
        }
        function send(){
            var data = $("#mensaje").val();
            conn.send(data);
            console.log($("#usuario").val() + " => " + data);
        }
    </script>
    </body>
</html>
