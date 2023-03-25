<?php

/**
 *  Este archivo contiene los metodos necesarios para poder
 *  interactuar con la base de datos
 */

require("./Model/Connection.php");

class Model{

    private $con;
    private $result = [];

    function __construct(){
        $this->con = Connection::Connection();
    }

    public function select_everything($table){
        $query = "SELECT * FROM {$table}";

        $stmt = $this->con->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->$result[] = $row;
        }

        return $this->$result;
    }

    public function select($table, $base, $offset){
        $query = "SELECT * from {$table} LIMIT {$base}, {$offset}";

        $stmt = $this->con->prepare($query);

        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->result[] = $row;
        }

        return $this->result;
    }

    public function select_count($table){
        $query = "SELECT COUNT(*) from {$table}";

        $stmt = $this->con->prepare($query);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row["COUNT(*)"];
    }

    public function insert_into($table, $name, $lastname, $email, $gender, $country, $job){

        $query = "INSERT INTO {$table} (first_name, last_name, email, gender, country, job_title) VALUES (:name, :last_name, :email, :gender, :country, :job)";

        $stmt = $this->con->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':last_name', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':job', $job);
        $stmt->execute();

        return true;
    }

    public function update($table, $id, $name, $lastname, $email, $gender, $country, $job){
        $query = "UPDATE {$table} SET first_name = :name, last_name = :last_name, email = :email, gender = :gender, country = :country, job_title = :job WHERE id = :id";

        $stmt = $this->con->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':last_name', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':job', $job);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return true;
    }

    public function delete($table, $id){
        $query = "DELETE FROM {$table} WHERE id = :id";

        $stmt = $this->con->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return true;
    }
}
?>