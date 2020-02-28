<?php


class loginControl
{

    function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['register'])) {
                require "View/register.php";
            } elseif (!empty($_POST['create'])) {
                require "View/login.php";
            } elseif (!empty($_POST['login'])) {
                $login = new Authentication();
                $login->loginCheck($_POST['email'], $_POST['password']);
                $login->getValidPass();
                if ($login->getIsLoginValid()) {
                    require "View/insert.php";
                }else {
                    require "View/login.php";
                    echo "Sorry! Too many wrong attempts👎🏼";
                }

            }
        } else {
            require "View/login.php";
        }
    }
}