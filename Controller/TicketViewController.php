<?php

use Model\BookedTicketModel;

class TicketViewController
{
    public $result1;

    public function getBookedTicket()
    {
        $this->result1 = new BookedTicketModel();
    }
}

    $ticketViewController = new TicketViewController();
    $ticketViewController->getBookedTicket();
    $result1 = $ticketViewController->result1;

    include '../View/view_tickets.php';

?>