<?php 
/** Define host and port for web socket  */
$host = '127.0.0.1';
$port = '8080';
/** create websocket with default Parameter  */
$socket = socket_create(AF_INET,SOCK_STREAM, 0) or die("Web socket is not created");
/** bind created socket with socket port and host */
$result = socket_bind($socket,$host,$port) or die('Socket is not bind');
/** create socket listen functionality with backlog  */
do {
    $result = socket_listen($socket,3) or die('socket is not listen');
    /** create socket accepted functionality */
    $accept = socket_accept($socket) or die ('not accepted');
    /** create socket read functionality with accept assigned functionality  */
    $msg = socket_read($accept,1024) or die('socket cannot read');
    /** Read socket after getting message from client and print to ws server */
    $msg = trim($msg);
    echo $msg."\n"; 
    echo "Enter Reply";
    $reply = fgets(STDIN);
    $reply =  socket_write($accept,$reply,strlen($reply));
} while(true);

socket_close($socket);

?>