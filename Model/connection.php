<?php

// Try to figure out what these should be for you
class Connection{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $db;

    /**
 /*    * @return mixed*/

    public function openConnection()
    {
        $this->dbhost = "localhost";
        $this->dbuser = "Gebruiker1";
        $this->dbpass = "Wachtwoord1!";
        $this->db = "BeCode";


// Try to understand what happens here
        $pdo = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->db, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



// Why we do this here
        return $pdo;

    }
}


