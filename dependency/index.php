<?php
include("./EmailServerInterface.php");
include("./MyEmailServer.php");
include("./EmailSender.php");

$emailserver = new MyEmailServer();
$emailSender = new EmailSender($emailserver);

$emailSender->send("","[]","test");
?>