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
//include('helper-functions.php');
$crud_action = null;
if (!empty($_POST['crud-action'])) {
    $crud_action = $_POST['crud-action'];
} else {
    $crud_action = $_COOKIE['previous-crud'];
}

print($crud_action);

if ($crud_action != 'create') {
    include 'house-list.php';
}

$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
setcookie('url', $current_url, time() + 100);
setcookie('previous-crud', $crud_action, time() + 100);
?>
<form action="crud-actions.php" method="post">
<!--<form action="--><?php //echo $_SERVER['PHP_SELF']; ?><!--" method="post">-->
    <div class="form-group">
        <input type="hidden" id="crud-action" name="crud-action" value="<?= $crud_action ?>">
        <input type='hidden' id='crud-auth' name='crud-auth' value='crud-auth'>
        <label for="house-id">House id:</label>
        <input type="number" name="house-id" id="house-id" class="form-control input-validation">
    </div>

    <?php
    if ($crud_action == 'create') {
        include 'house-form.php';
    } else if ($crud_action == 'delete') {
        //        echo "<button type='submit' class='btn btn-primary mb-2' onclick='return confirm(confirm_message());'>Delete house</button>";
        echo "<button type='submit' class='btn btn-primary mb-2' onclick='return confirm_action()'>Delete house</button>";
    } else {
        echo "<button type='submit' value='submit' class='btn btn-primary mb-2'>Choose action</button>";
        echo "<input type='hidden' id='hidden-confirmation' name='hidden-confirmation' value=''>";
    }
    ?>
</form>
<script>
    function confirm_action() {
        console.log(document.getElementsByClassName('input-validation')[0].value)
        if (document.getElementsByClassName('input-validation')[0].value === "") {
            return alert(choose_input());
        } else {
            return confirm(confirm_message());
        }
    }

    function confirm_message() {
        return "Are you sure you want to perform this action?";
    }

    function choose_input() {
        return "Please input a value";
    }
</script>
</body>
</html>

<?php
