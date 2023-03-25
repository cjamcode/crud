<?php
require("./View/Templates/head.php");
require("./View/Templates/navbar.php");
require("./View/Templates/add_employee.php");
?>

<div class="container mt-5">
    <table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Job</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_row as $key => $value):?>
            <tr>
                <th><?= $data_row[$key]["id"] ?></th>
                <th><?= $data_row[$key]["first_name"] ?></th>
                <th><?= $data_row[$key]["last_name"] ?></th>
                <th><?= $data_row[$key]["email"] ?></th>
                <th><?= $data_row[$key]["gender"] ?></th>
                <th><?= $data_row[$key]["country"] ?></th>
                <th><?= $data_row[$key]["job_title"] ?></th>
                <th><a class="btn btn-warning" href="#"><i class="bi bi-pencil-square"></i></a><a class="btn btn-danger" href="#"><i class="bi bi-trash3"></i></a></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
<?php
require("./View/Templates/pagination.php");
require("./View/Templates/footer.php");
?>