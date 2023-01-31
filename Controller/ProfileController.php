<?php

session_start();
error_reporting(0);

use Model\UserProfileModel;

require_once '../Model/UserProfileModel.php';
class ProfileController{
    public $userType;

    public $row;
}

$profile = new UserProfileModel();
$profileController = new ProfileController();

if ($profile->getUserType() == 'Student'){
    $profileController->row = $profile->studentProfile();
}

if($profile->getUserType() == 'Staff'){
    $profileController->row= $profile->staffProfile();


}

if ($profile->getUserType() == 'Faculty'){
    $profileController->row = $profile->facultyProfile();
}

$userType = $profile->getUserType();
$row = $profileController->row;

include '../View/profile.php';




?>