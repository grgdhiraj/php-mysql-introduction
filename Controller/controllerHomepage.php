<?php
declare(strict_types=1);

class controllerHomepage
{

    public function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newConnection = new Connection();
            $newConnection = $newConnection->openConnection();
            $user = new User($_POST['first_name'],
                $_POST['last_name'],
                $_POST['username'],
                $_POST['linkedin'],
                $_POST['github'],
                $_POST['email'],
                $_POST['preferred_language'],
                $_POST['avatar'],
                $_POST['video'],
                $_POST['quote'],
                $_POST['quote_author']
            );

            $insertInfo = "INSERT INTO students (first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author)
                             VALUES (:first_name, :last_name, :username, :linkedin, :github, :email, :preferred_language, :avatar, :video, :quote, :quote_author)";


            $newConnection->prepare($insertInfo)
                ->execute([
                    'first_name' => $user->getFirstName(),
                    'last_name' => $user->getLastName(),
                    'username' => $user->getUsername(),
                    'linkedin' => $user->getLinkedin(),
                    'github' => $user->getGithub(),
                    'email' => $user->getEmail(),
                    'preferred_language' => $user->getPreferredLanguage(),
                    'avatar' => $user->getAvatar(),
                    'video' => $user->getVideo(),
                    'quote' => $user->getQuote(),
                    'quote_author' => $user->getQuoteAuthor()
                ]);

        }
        require "View/insert.php";
    }
}

    /*private function insert()
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
}*/