<?php

$dbhost = "localhost";
$dbname = "chat_system";
$dbuser = "root";
$dbpass = "1990";

try{
    $db =new PDO("mysql:dbhost=$dbhost;dbname=$dbname","$dbuser","$dbpass");
}catch(PDOException $e)
{
    echo $e->getmessage();
}




?>