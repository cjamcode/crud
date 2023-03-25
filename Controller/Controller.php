<?php

require("./Model/Model.php");

$data = new Model();


$employees_per_view = 10;   //variable que sostiene la cantidad de empleados en la vista principal
$page = 0;

if(isset($_GET["page"]))
    $page = $_GET["page"] - 1;

$data_row = $data->select("workers", $page*$employees_per_view, $employees_per_view);

$amoung_employees = $data->amoung_employees("workers"); //variable que contiene la cantidad de empleados en la base de datos
$pagination = 0;

if(($amoung_employees % $employees_per_view) != 0)
    $pagination = ($amoung_employees / $employees_per_view) + 1;
else
    $pagination = $amoung_employees / $employees_per_view;


require("./View/Main_view.php");

?>