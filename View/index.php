<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Makelaarskantoor Sus</title>
</head>
<body>
<header>
    <?php
    include "import-files.php";
    include "helper-functions.php";

    if (isset($_POST['submit'])) {
        if (filter_has_var(INPUT_POST, 'woonwijk')) {
            header('location: crud-actions.php');
        } else {
            echo '<script>alert("Voer aub een geldige woonwijk in");</script>';
        }
    }
    //    include "crud-actions.php";
    //    OpenCon();
    //    Ghouse();
    ?>
</header>

<h1>Makelaarskantoor Sus</h1>
<div class="container">
    <div class="index-zoek mt-5 mb-5">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>

            <div class="zoek-input">
                <!--                <form action="crud-actions.php" method="post">-->
                <form name="woonwijkform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type='hidden' id='crud-auth' name='crud-auth' value='crud-auth'>
                    <input type="hidden" name="get-houses" id="get-houses" value="true">
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" name="woonwijk" id="inlineFormInputName2"
                           placeholder="Zoek op woonwijk...">
                    <button name="submit" type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="index-aanbod mb-5 mt-5">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>