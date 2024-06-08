<?php

class DatabaseConnection {

    // Private properties to encapsulate data
    // Encapsulation
    private $host;
    private $username;
    private $password;
    private $database;

    // Constructor to initialize object state
    public function __construct($host, $username, $password, $database) {
         // Encapsulation - setting the value of private property
        $this->host = $host;
        $this->username = $username; 
        $this->password = $password; 
        $this->database = $database; 
    }

    // Method to establish a database connection
    public function connect() {
       
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database); // Encapsulation - accessing private properties

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);
        } else {
   
            echo ""; 
        }

        return $conn; // Encapsulation - returning object with internal state
    }
}


