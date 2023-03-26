<?php
require("./Model/Model.php");

if(!isset($_GET["id"]))
    header("location:?view=main");
    
$data_employee;

if(!isset($_GET["submit"])){
    $id = $_GET["id"];

    $model = new Model();
    
    $data_employee = $model->select_employee("workers", $id);
}
else{
    $name = $_GET["name"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];
    $gender = $_GET["gender"];
    $country = $_GET["country"];
    $job = $_GET["job"];
    $id = $_GET["id"];

    $model = new Model();

    $model->update("workers", $id, $name, $lastname, $email, $gender, $country, $job);

    header("location:?view:main");
}


require("./View/Update.php");
?>