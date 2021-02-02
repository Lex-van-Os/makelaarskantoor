<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['crud-auth'])) {
    if (isset($_POST['crud-action']) && $_POST['crud-action'] == 'create') {
        Chouse();
    }
    else if (isset($_POST['crud-action']) && $_POST['crud-action'] == 'update') {
        Gupdate($_POST['house-id']);
    }

    else if (isset($_POST['crud-action']) && $_POST['crud-action'] == 'delete') {
        Dhouse($_POST['house-id']);
    }
    else if ($_POST['get-houses'] == 'true') {
        Gwoonwijk();
    }
}

if (isset($_POST['update-auth'])) {
    Uhouse();
}

function Ghouse()
{
    require_once 'DBConnect.php';
    $dbsettings = getSettings();

// Create connection
    $conn = new mysqli($dbsettings[0], $dbsettings[1], $dbsettings[2], $dbsettings[3]);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from huis";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        print_results($result);
    } else {
        echo "0 results";
    }
    $conn->close();
}

function Gupdate($house_id)
{
    require_once 'DBConnect.php';
    $house_id = (int)$house_id;
    $dbsettings = getSettings();
    $idhouse = $house_id;

// Create connection
    $conn = new mysqli($dbsettings[0], $dbsettings[1], $dbsettings[2], $dbsettings[3]);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from huis WHERE idhuis = $idhouse";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        include('update-house-form.php');
        get_results($result);
    } else {
        echo "0 results";
    }
    $conn->close();
}

function Chouse()
{
    require_once 'DBConnect.php';
    $dbsettings = getSettings();
    $idhouse = (int)$_POST['house-id'];
    $stories = (int)$_POST['house-stories'];
    $width = (int)$_POST['house-width'];
    $height = (int)$_POST['house-height'];
    $depth = (int)$_POST['house-depth'];
    $price = (int)$_POST['house-price'];
    $type = (int)$_POST['house-type'];
    $status = (int)$_POST['house-status'];
    $resident = (int)$_POST['house-resident'];
    $rooms = (int)$_POST['house-rooms'];

// Create connection
    $conn = new mysqli($dbsettings[0], $dbsettings[1], $dbsettings[2], $dbsettings[3]);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = ("INSERT INTO huis (idhuis, verdiepingen, breedte, hoogte, diepte, prijs, woningtype_idwoningtype, woningstatus_idwoningstatus, woonwijk_idwoonwijk, kamers) VALUES (?,?,?,?,?,?,?,?,?,?)");
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("iiiiiiiiii", $idhouse, $stories, $width, $height, $depth, $price, $type, $status, $resident, $rooms);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("location: admin.php?success=1");
    } else {
        $error = $conn->errno . ' ' . $conn->error;
        echo $error; // 1054 Unknown column 'foo' in 'field list'
        $stmt->close();
        $conn->close();
    }
    die();
}

function Uhouse()
{
    require_once 'DBConnect.php';
    $dbsettings = getSettings();
    $idhouse = (int)$_POST['house-id'];
    $oldid = (int)$_POST['old-id'];
    $stories = (int)$_POST['house-stories'];
    $width = (int)$_POST['house-width'];
    $height = (int)$_POST['house-height'];
    $depth = (int)$_POST['house-depth'];
    $price = (int)$_POST['house-price'];
    $type = (int)$_POST['house-type'];
    $status = (int)$_POST['house-status'];
    $resident = (int)$_POST['house-resident'];
    $rooms = (int)$_POST['house-rooms'];

// Create connection
    $conn = new mysqli($dbsettings[0], $dbsettings[1], $dbsettings[2], $dbsettings[3]);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = ("UPDATE huis SET idhuis = ?, verdiepingen = ?, breedte = ?, hoogte = ?, diepte = ?, prijs = ?, woningtype_idwoningtype = ?, woningstatus_idwoningstatus = ?, woonwijk_idwoonwijk = ?, kamers = ? WHERE idhuis = ?");
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("iiiiiiiiiii", $idhouse, $stories, $width, $height, $depth, $price, $type, $status, $resident, $rooms, $oldid);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("location: admin.php?success=1");
    } else {
        $error = $conn->errno . ' ' . $conn->error;
        echo $error; // 1054 Unknown column 'foo' in 'field list'
        $stmt->close();
        $conn->close();
    }
    die();
}

function Dhouse($idhouse)
{
    require_once 'DBConnect.php';
    $dbsettings = getSettings();

// Create connection
    $conn = new mysqli($dbsettings[0], $dbsettings[1], $dbsettings[2], $dbsettings[3]);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = ("DELETE FROM huis WHERE idhuis = ?");
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $idhouse);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("location: admin.php?success=1");
    } else {
        $error = $conn->errno . ' ' . $conn->error;
        echo $error; // 1054 Unknown column 'foo' in 'field list'
        $stmt->close();
        $conn->close();
    }
    die();
}

function Gwoonwijk() {
    $woonwijk = $_POST['woonwijk'];
    var_dump($woonwijk);
    require_once 'DBConnect.php';
    $redirect_result = '';
    $dbsettings = getSettings();

// Create connection
    $conn = new mysqli($dbsettings[0], $dbsettings[1], $dbsettings[2], $dbsettings[3]);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = ("SELECT idwoonwijk FROM woonwijk WHERE naam = ?");
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $woonwijk);
        $stmt->execute();
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

        } else {
            echo "0 results";
        }
        header("location: admin.php?success=1");
    } else {
        echo '<script type="text/javascript">alert("No results found")</script>';
        $error = $conn->errno . ' ' . $conn->error;
        echo $error; // 1054 Unknown column 'foo' in 'field list'
        $stmt->close();
        $conn->close();
    }
    die();
}

function GhouseWhere() {

}

?>