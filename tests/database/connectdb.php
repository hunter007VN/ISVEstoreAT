<?php

class BaseTest extends WebDriverTestCase
{

    public function testLogin()
    {

        $servername = "172.16.4.106";
        $username = "stdev";
        $password = "stdev";

// Create connection
        $conn = new mysqli($servername, $username, $password);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }


}
