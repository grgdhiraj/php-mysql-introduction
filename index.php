<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Controller/loginControl.php';
require 'Controller/registerControl.php';
require 'Controller/controllerHomepage.php';
require 'Controller/profileControl.php';
require 'Model/user.php';
require 'Model/connection.php';
require 'Model/Query.php';
require 'Model/account.php';
require 'Model/authentication.php';





if(!empty($_POST['submitButton'])){
    $controller = new controllerHomepage();
    $controller->render();
}elseif (!empty($_POST['create'])){
    $controller = new registerControl();
    $controller->render();
}elseif (!isset($_GET['user'])){
    $controller = new loginControl();
    $controller->render();
}
else {
    $profileControl = new profileControl();
    $profileControl->render();
}
//$controller = new controllerHomepage();
//$controller ->render();

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newConnection = openConnection();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST ['username'];
    $linkedin = $_POST ['linkedin'];
    $github = $_POST ['github'];
    $email = $_POST ['email'];
    $preferred_language = $_POST ['preferred_language'];
    $avatar = $_POST ['avatar'];
    $video = $_POST ['video'];
    $quote = $_POST ['quote'];
    $quote_author = $_POST ['quote_author'];

    $insertInfo = "INSERT INTO students (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author)
                             VALUES (:first_name, :last_name, :username, :linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)";


    $newConnection->prepare($insertInfo)
        ->execute([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'linkedin' => $linkedin,
            'github' => $github,
            'email' => $email,
            'preferred_language' => $preferred_language,
            'avatar' => $avatar,
            'video' => $video,
            'quote' => $quote,
            'quote_author' => $quote_author
        ]);
}*/


