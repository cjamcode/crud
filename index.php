<?php



if(!isset($_GET["view"])){

    require("./Controller/Controller.php");
}
else{
    $view = $_GET["view"];

    switch ($view) {
        case 'main':
            require("./Controller/Controller.php");
            break;

        case 'create':
            require("./Controller/Create.php");
            break;  

        case 'update':
            require("./Controller/Update.php");
            break;

        case 'delete':
            require("./Controller/Delete.php");
            break;
        
        default:
            
            require("./Controller/Controller.php");
            break;
    }
}

?>