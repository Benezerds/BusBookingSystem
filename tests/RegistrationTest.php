<?php

use Model\UserModel;

require_once '../Model/UserModel.php';

class RegistrationTest extends PHPUnit\Framework\TestCase
{
    public function testRegisterUserSuccess()
    {
        $userModel = new UserModel();

        $_POST['UserID'] = 521511;
        $_POST['Password'] = 'anothercase';
        $_POST['Name'] = 'Case Person';
        $_POST['Batch'] = '2012';
        $_POST['Dept'] = 'CSE';
        $_POST['BloodG'] = 'B+';
        $_POST['Type'] = 'Student';

        $result = $userModel->registerUser();

        $this->assertNotFalse($result);
    }
}