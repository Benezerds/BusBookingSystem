<?php
session_start();
error_reporting(0);

use Model\BookedTicketModel;

require_once '../Model/BookedTicketModel.php';
require_once '../Dao/Connection.php';
class TicketViewController
{
    public $results;

    public function getBookedTicket()
    {
        $this->results = new BookedTicketModel();
    }


    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param mixed $results
     */
    public function setResults($results): void
    {
        $this->results = $results;
    }
}
    $bookedTicketModel = new BookedTicketModel();
    $row = $bookedTicketModel->getRow();

    $userType = $bookedTicketModel->getUserType();

    $result1 = $bookedTicketModel->getResult1();

include '../View/view_tickets.php';




?>