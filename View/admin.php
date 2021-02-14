<?php
if ( isset($_GET['success'])) {
    if ($_GET['success'] == '1') {
        echo '<script type="text/javascript">alert("Database successfuly updated!")</script>';
    }
};
    ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Sus intermediate admin</title>
</head>
<body>
<div class="container">
    <h1>Sus adminscherm</h1>
    <h2>Please choose your desired action</h2>

    <form action="crud-form.php" method="post" class="form-inline">
        <label for="crud-action">Choose a function:</label>
        <input type="hidden" name="admin-val" value="admin">

        <select name="crud-action" id="crud-action">
            <option value="create">Create</option>
            <option value="read">Read</option>
            <option value="update">Update</option>
            <option value="delete">Delete</option>
        </select>
        <button type="submit" class="btn btn-primary mb-2" value="">Choose action</button>
    </form>
    <h2>CRUD acties</h2>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="create-tab" data-toggle="tab" href="#create" role="tab" aria-controls="create"
               aria-selected="true">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="read-tab" data-toggle="tab" href="#read" role="tab" aria-controls="read"
               aria-selected="false">Read</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="update-tab" data-toggle="tab" href="#update" role="tab" aria-controls="update"
               aria-selected="false">Update</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="delete-tab" data-toggle="tab" href="#delete" role="tab" aria-controls="delete"
               aria-selected="false">Delete</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="create" role="tabpanel" aria-labelledby="create-tab">...</div>
        <div class="tab-pane fade" id="read" role="tabpanel" aria-labelledby="read-tab">...</div>
        <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-tab">...</div>
        <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">...</div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>