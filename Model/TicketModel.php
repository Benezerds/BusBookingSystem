<?php

namespace Model;


class TicketModel
{
    public $ticketData;

    public function __construct(){
        require '../View/db_init.php';
        $conn = require '../Dao/Connection.php';
        $userID = $_SESSION['UserID'];
        $bid = $_GET['bid'];
        $seat = $_GET['seat'];
        $sql_instance="SELECT * FROM busbooking.seat_matrix JOIN busbooking.routes ON busbooking.seat_matrix.RID = busbooking.routes.RID WHERE Passenger=".$userID." AND BID=".$bid." AND SeatNo=".$seat.";";
        $result = $conn->query($sql_instance);
        $this->ticketData = $result->fetch_assoc();
    }

    /**
     * @return mixed
     */
    public function getTicketData()
    {
        return $this->ticketData;
    }

    /**
     * @param mixed $ticketData
     */
    public function setTicketData($ticketData): void
    {
        $this->ticketData = $ticketData;
    }


}