<?php
/**
 * Created by PhpStorm.
 * User: Horacio
 * Date: 28/02/2016
 * Time: 01:36 AM
 */
namespace RatchetProject\Classes\Socket\Base;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class BaseSocket implements MessageComponentInterface{
    public function onOpen(ConnectionInterface $conn){

    }
    public function onMessage(ConnectionInterface $from, $msg){

    }
    public function onClose(ConnectionInterface $conn){

    }
    public function onError(ConnectionInterface $conn, \Exception $e){

    }
}