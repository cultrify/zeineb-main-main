<?php
    include_once dirname(__FILE__). '/../../Controller/TicketC.php';

    $ticketc = new TicketC();
    $ticketc->deleteTicket($_GET["IDTicket"]);
    header('Location: ./index.php');
?>