<?php
if(isset($_POST['submit'])) {
    $host = '127.0.0.1';
    $port = '8080';
    $socket = socket_create(AF_INET,SOCK_STREAM,0) or die('socket is not created');
    socket_connect($socket,$host,$port) or die('not connect');
    $msg = $_POST['message']; 
    socket_write($socket,$msg,strlen($msg));
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body >
    <h1>full duplex message example</h1>
    <form method="Post">
    <div class="chat-panel">
       <div class="chat-box" id="chat-box"></div>
       <div class="user-panel">
            <input type="text" name="message" id="message" placeholder="Enter message" maxlength="15"/>
            <button type="submit" name="submit" id ="send-message">Send Message</button>
       </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    </script>
  </body>
</html>