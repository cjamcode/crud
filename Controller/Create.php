<?php
require("./Model/Model.php");

if(!isset($_GET["submit"]))
    require("./View/Create.php");
else if(isset($_GET["submit"]) && $_GET["submit"] != "true")
    require("./View/Create.php");
else{
    $name = $_GET["name"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];
    $gender = $_GET["gender"];
    $country = $_GET["country"];
    $job = $_GET["job"];

    $model = new Model();

    $model->insert_into("workers", $name, $lastname, $email, $gender, $country, $job);

    header("location:?view:main");
}
?>