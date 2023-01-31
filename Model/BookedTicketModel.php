<?php

namespace Model;

class BookedTicketModel
{
    //  Object of the results that is going to be passed
    private $result1;


    public function __construct()
    {
        require_once("../Dao/DBConnection.php");

        $userID = $_SESSION['UserID'];
        $sql = "SELECT Type FROM buskaro.passenger WHERE ID='$userID'";

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $userType = $row['Type'];

        $sql1 = "SELECT * FROM buskaro.seat_matrix JOIN buskaro.routes ON buskaro.seat_matrix.RID = buskaro.routes.RID WHERE Passenger = '$userID' ORDER BY BusDate DESC";

        //  The object result1 now containts the
        $this->setResult1($conn->query($sql1));
    }

    /**
     * @return mixed
     */
    public function getResult1()
    {
        return $this->result1;
    }

    /**
     * @param mixed $result1
     */
    public function setResult1($result1): void
    {
        $this->result1 = $result1;
    }


}