<?php

include '../Model/classAddress.php';
include '../Model/classEvent.php';
include '../Model/classTicket.php';
include '../Model/classUser.php';

include '../Repository/connection.php';
include '../Repository/repositoryTicket.php';
include '../Repository/RepositoryAddress.php';
include '../Repository/repositoryEvent.php';

$connection = new Connection('localhost', 'root', '', 'ticketsystem');
$repositoryEvent = new RepositoryEvent($connection->getDatabase());

$events = $repositoryEvent->showEvent(new Event(),1);


?>
