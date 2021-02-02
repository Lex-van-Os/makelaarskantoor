<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud-form</title>
</head>
<body>
<?php
include('import-files.php');
$crud_action = $_POST['crud-actions'];

if ($crud_action != 'create') {
    include 'house-list.php';
}
?>
<form action="crud-actions.php" method="post">
    <div class="form-group">
        <input type="hidden" id="crud-action" name="crud-action" value="<?= $crud_action ?>">
        <input type='hidden' id='crud-auth' name='crud-auth' value='crud-auth'>
        <label for="house-id">House id:</label>
        <input type="number" name="house-id" id="house-id" class="form-control">
    </div>

    <?php
    if ($crud_action == 'create') {
        include 'house-form.php';
    } else {
        echo "<button type='submit' class='btn btn-primary mb-2' value=''>Choose action</button>";
    }
    ?>
</form>
</body>
</html>

<?php
