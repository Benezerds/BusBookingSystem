<?php

namespace Model;

class UserProfileModel {
    private $userID;
    private $userType;


        public function __construct()
        {
            require_once("../Dao/Connection.php");

            $this->userID = $_SESSION['UserID'];
            $sql = "SELECT Type FROM buskaro.passenger WHERE ID='$this->userID'";

            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $this->userType = $row['Type'];
        }

        public function studentProfile(){
            require_once("../Dao/Connection.php");
            $sql_instance = "SELECT * FROM buskaro.student WHERE RollNo='$this->userID'";
            $result = $conn->query($sql_instance);
            $row = $result->fetch_assoc();
            return $row;
        }

        public function facultyProfile(){
            require_once ("../Dao/Connection.php");
            $sql_instance="SELECT * FROM buskaro.faculty WHERE FID='$this->userID';";
            $result = $conn->query($sql_instance);
            $row = $result->fetch_assoc();
            return $row;
        }

        public function staffProfile(){
            require_once ("../Dao/Connection.php");
            $sql_instance="SELECT * FROM buskaro.staff WHERE EID='$this->userID';";
            $result = $conn->query($sql_instance);
            $row = $result->fetch_assoc();
            return $row;
        }




    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID): void
    {
        $this->userID = $userID;
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



}