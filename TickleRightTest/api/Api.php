<?php

class API
{
    private $conect = ' ';

    function __construct()
    {
        $this->database_connection();

    }

    function database_connection()
    {
        $this->connect = new PDO(" mysqli:host=localhost;dbname=testing", "root", " ");
    }

    function fetch_all()
    {
        $query = "SELECT * FROM tbl_sample ORDER BY id";
        $statement = $this->connect->prepare($query);
        if($statement->execute())
        {
            while($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $data[] = $row;
            }
            return $data;
        }
    }
}    
?>
