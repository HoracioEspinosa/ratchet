<?php
/**
 * Created by PhpStorm.
 * User: Horacio
 * Date: 28/02/2016
 * Time: 01:58 AM
 */
namespace RatchetProject\Classes\Socket;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
class ChatSocket implements MessageComponentInterface{
    protected $clients;
    public function __construct(){
        $this->clients = new \SplObjectStorage;
    }
    public function onOpen(ConnectionInterface $conn){
        $this->clients->attach($conn);
        //$this->clients[$conn->resourceId] = $conn;
        echo "New connection! ({ '.$conn->resourceId.' })\n";
    }
    public function onMessage(ConnectionInterface $from, $msg){
        $numRecv = count($this->clients) -1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n", $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');
        foreach ($this->clients as $client) {
            if ($from !== $client) {
                $client->send($msg);
            }
        }
    }
    public function onClose(ConnectionInterface $conn){
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
    }
    public function onError(ConnectionInterface $conn, \Exception $e){
        echo "An error has ocurred: {$e->getMessage()}\n";
        $conn->close();
    }
}