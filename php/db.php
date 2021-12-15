<?php
namespace DB;

class DBAccess{
    private const HOST_DB = "127.0.0.1";
    private const DATABASE_NAME = "lbusacca";
    private const USERNAME = "lbusacca";
    private const PASSWORD = "";

    private $connection;

    public function openDBConnection(){
        $this->connection = mysqli_connect(DBAccess::HOST_DB, DBAccess::USERNAME, DBAccess::PASSWORD, DBAccess::DATABASE_NAME);

        if (mysqli_connect_errno($this->connection)){
            return false;
        }
        else{
            return true;
        }
    }

    public function closeDBConnection(){
        mysqli_close($this->connection);
    }
}

public function getCharacterList(){
    $query = "SELECT * FROM personaggi ORDER BY ID ASC";
    $queryResult = mysqli_query($this->connection, $query) or die("Errore in getCharacterList: " . mysqli_error($this->connection));

    if(mysqli_num_row($queryResult) > 0){
        $result = array();
        while($row = mysqli_fetch_assoc($queryResult)){
            array_push($result, $row);
        }
    }
    else{
        return null;
    }
    
    $queryResult->free();
    return $result;
}


?>