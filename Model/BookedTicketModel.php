<?php

namespace Model;

class BookedTicketModel
{
    //  Object of the results that is going to be passed
    private $row;
    private $userType;
    private $result1;


    public function __construct()
    {
        $conn = require ("../Dao/Connection.php");
        $userID = $_SESSION['UserID'];
        $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID'";
        $result = $conn->query($sql);
        $this->setRow($result->fetch_assoc());

        $this->setUserType($this->getRow(['Type']));

        $sql1 = "SELECT * FROM buskaro.seat_matrix JOIN buskaro.routes ON buskaro.seat_matrix.RID = buskaro.routes.RID WHERE Passenger = '$userID' ORDER BY BusDate DESC";
        $result1 = $conn->query($sql1);

        $this->setResult1($result1);
    }

    /**
     * @return mixed
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param mixed $row
     */
    public function setRow($row): void
    {
        $this->row = $row;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param mixed $userType
     */
    public function setUserType($userType): void
    {
        $this->userType = $userType;
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