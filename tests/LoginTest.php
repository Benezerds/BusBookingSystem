<?php

use Model\UserModel;

require_once '../Model/UserModel.php';

class LoginTest extends PHPUnit\Framework\TestCase
{
    public function testLoginSuccess()
    {
        $userModel = new UserModel();

        $_POST['UserID'] = '12';
        $_POST['Password'] = 'ben123';

        $result = $userModel->login();

        $this->assertEquals(true, $result);
        $this->assertArrayHasKey('UserID', $_SESSION);
        $this->assertArrayHasKey('Password', $_SESSION);
        $this->assertArrayHasKey('Type', $_SESSION);
    }
}