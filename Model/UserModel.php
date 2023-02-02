<?php

namespace Model;

class UserModel
{
    private $db;
    private $userID;
    private $password;
    private $name;
    private $batch;
    private $dept;
    private $bloodG;

    private $type;


    // Validation of Populated Data in Form Fields
    function filterinput($conn, $data)
    {
        //removes spaces at the beginning and
        //at the end of the string
        $data = trim($data);

        //remove against bars:
        // "water snake" becomes "water snake"
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        //Remove characters a hacker might have
        //entered to hack or alter database
        $data = $conn->real_escape_string($data);

        return $data;
    }

    public function login()
    {
        require_once("../Dao/Connection.php");

        // Stage 1: Preparation
        $query = "SELECT * FROM busbooking.passenger WHERE ID=? AND Pwd=?";
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            echo "Preparation Failed: (" . $conn->errno . ")" . $conn->error;
        }

        // Stage 2: Parameter Association (bind)
        $user = $this->filterinput($conn, $_POST['UserID']);
        $password = $this->filterinput($conn, $_POST['Password']);

        $bind = $stmt->bind_param("is", $user, $password);
        if (!$bind) {
            echo "Connection parameters failed: (" . $stmt->errno . ")" . $stmt->error;
        }

        // Stage 3: Execution
        if (!$stmt->execute()) {
            echo "Executing statement: (" . $stmt->errno . ")" . $stmt->error;
        }

        // Stage 4: Obtaining Data
        $res = $stmt->get_result();
        if (!$res) {
            echo "Result Set Fetch Failed: (" . $stmt->errno . ")" . $stmt->error;
        }

        //  Login Procedure
        $t = false;
        if ($res->num_rows) {
            $linha = $res->fetch_assoc();
            if ($linha['Pwd'] == $password) {
                $_SESSION['UserID'] = $linha['ID'];
                $_SESSION['Type'] = $linha['Type'];
                $_SESSION['Password'] = md5($linha['Pwd']);
                $t = 'true';
                return $t;
            }
        }
        $stmt->close();
        $conn->close();
    }

    public function registerUser()
    {
        require_once("../Dao/Connection.php");

        // Stage 1: Preparation
        $query = "CALL addUser(?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($query);
        if (!$stmt) {
            echo "Preparation failed: (" . $conn->errno . ")" . $conn->error;
        }

        //Stage 2: Parameter Association (bind)
        $this->userID = $this->filterinput($conn, $_POST['UserID']);
        $this->password= $this->filterinput($conn, $_POST['Password']);
        $this->name = $this->filterinput($conn, $_POST['Name']);
        $this->batch = $this->filterinput($conn, $_POST['Batch']);
        $this->dept = $this->filterinput($conn, $_POST['Dept']);
        $this->bloodG = $this->filterinput($conn, $_POST['BloodG']);
        $this->type = $this->filterinput($conn, $_POST['Type']);

        $bind = $stmt->bind_param("ississs", $this->userID, $this->password, $this->name, $this->batch, $this->dept, $this->bloodG, $this->type);
        if (!$bind) {
            echo "Connection parameters failed: (" . $stmt->errno . ")" . $stmt->error;
        }

        // Stage 3: Execution
        if ($stmt->execute()) {
            $regResult = true;
            return $regResult;
            echo "<script type='text/javascript'>alert('Registration Successful')</script>";
        } else {
            $regResult = false;
            return $regResult;
            echo "Execution failed: (" . $stmt->errno . ")" . $stmt->error;
            echo "<script type='text/javascript'>alert('User Exists " . $conn->error . "')</script>";
        }

        $stmt->close();
        $conn->close();
    }






}