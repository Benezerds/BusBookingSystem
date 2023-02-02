<?php

use Model\TicketModel;

require_once '../Model/TicketModel.php';

class GetTicketTest extends PHPUnit\Framework\TestCase
{
    public function testTicketData()
    {
        // Test inputs
        $_SESSION['UserID'] = 2001;
        $_GET['bid'] = 61;
        $_GET['seat'] = 1;

        $userID = $_SESSION['UserID'];
        $bid = $_GET['bid'];
        $seat = $_GET['seat'];
        $this->ticketData = new TicketModel();

        // Check the output
        $this->assertNotNull($this->ticketData);
    }
}