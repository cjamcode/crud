<?php
require("./View/Templates/head.php");
require("./View/Templates/navbar.php");
require("./View/Templates/back_to_main.php");
?>
<div class="container d-flex justify-content-center">
    <form action="" method="email" class="card col-6 px-3 py-3 mt-5">

        <div class="mb-3">
            <label for="name" class="form-label">First name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?=$data_employee["first_name"]?>" placeholder="First name">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?=$data_employee["last_name"]?>" placeholder="Lastname">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$data_employee["email"]?>" placeholder="Email">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="gender" class="form-control" id="gender" name="gender" value="<?=$data_employee["gender"]?>" placeholder="Gender">
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="country" class="form-control" id="country" name="country" value="<?=$data_employee["country"]?>" placeholder="Country">
        </div>

        <div class="mb-3">
            <label for="job" class="form-label">Job</label>
            <input type="job" class="form-control" id="job" name="job" value="<?=$data_employee["job_title"]?>" placeholder="Job">
        </div>

        <input type="hidden" name="view" value="update">
        <input type="hidden" name="id" value="<?=$data_employee["id"]?>">

        <div class="col-12 container d-flex justify-content-center">
            <button class="btn btn-primary" type="submit" name="submit" value="true">Submit form</button>
        </div>

</form>
</div>


<?php
require("./View/Templates/footer.php");
?>