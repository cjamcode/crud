<?php

require("./Model/Model.php");

$data = new Model();

$data_row = $data->select("workers", 0, 6);

require("./View/Main_view.php");

?>