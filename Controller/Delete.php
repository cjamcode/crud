<?php
require("./Model/Model.php");

if(!isset($_GET["id"]))
    header("location:?view=main");

$model = new Model();

$id = $_GET["id"];

$model->delete("workers", $id);
header("location:?view=main");


?>