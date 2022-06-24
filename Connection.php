<?php

class connection{
     public $server,$username,$password,$database;
     
     public function connectionDatabase()

}
public function connectionDatabase()
{
$connection =new mysqli($this->server,
    $this->username,
    $this->password
);
If($connection->connect_error)
die()
}
$conn = new Connection(
    'localhost'
    'root',
    ''
);
$conn->close