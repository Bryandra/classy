<?php

class DatabaseConnexion
{

    private $dsn;
    private $username;
    private $password;

    public function __construct(string $dsn, string $username, string $password)
    {

        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;

    }

    public function connect()
    {
        
        new PDO('dawan', 'dawan');

    }
    
}