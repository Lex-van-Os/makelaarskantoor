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
<?php
//include "import-files.php";
//include "crud-actions.php";
//Ghouse();
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Stories</th>
        <th scope="col">Width</th>
        <th scope="col">Height</th>
        <th scope="col">Depth</th>
        <th scope="col">Price</th>
        <th scope="col">id type</th>
        <th scope="col">id status</th>
        <th scope="col">id Resident</th>
        <th scope="col">Rooms</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include "crud-actions.php";
    Ghouse();
    function print_results($resultset)
    {
        while ($row = $resultset->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>" . $row["idhuis"] . "</th>";
            echo "<td>" . $row["verdiepingen"] . "</td>";
            echo "<td>" . $row["breedte"] . "</td>";
            echo "<td>" . $row["hoogte"] . "</td>";
            echo "<td>" . $row["diepte"] . "</td>";
            echo "<td>" . $row["prijs"] . "</td>";
            echo "<td>" . $row["woningtype_idwoningtype"] . "</td>";
            echo "<td>" . $row["woningstatus_idwoningstatus"] . "</td>";
            echo "<td>" . $row["woonwijk_idwoonwijk"] . "</td>";
            echo "<td>" . $row["kamers"] . "</td>";
            echo "</tr>";
        }
    }

    ?>
    </tbody>
</table>
</body>
</html>