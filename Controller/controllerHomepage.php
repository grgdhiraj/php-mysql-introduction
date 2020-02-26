<?php
declare(strict_types=1);

require 'Model/connection.php';
require 'View/insert.php';


class controllerHomepage
{

    public function fillDatabase(array $GET, array $POST)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->insert();
        }
        require "View/insert.php";
    }

    private function insert()
    {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $userName = $_POST['username'];
        $linkedIn = $_POST['linkedin'];
        $email = $_POST['github'];
        $github = $_POST['email'];
        $prefLanguage = $_POST['preferred_language'];
        $avatar = $_POST['avatar'];
        $video = $_POST['video'];
        $quote = $_POST['quote'];
        $quote_author = $_POST['quote_author'];

    }
}