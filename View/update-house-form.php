<body>
<?php
//$testint = 2;
//var_dump($testint);
//$row = [];
//include('import-files.php');
function get_results($resultset)
{
//    $row = [];
//    $idhuis = $row['idhuis'];
//    $stories = $row['verdiepingen'];
//    $width = $row['breedte'];
//    $height = $row['hoogte'];
//    $depth = $row['diepte'];
//    $price = $row['prijs'];
//    $type = $row['woningtype_idwoningtype'];
//    $status = $row['woningstatus_idwoningstatus'];
//    $resident = $row['woonwijk_idwoonwijk'];
//    $rooms = $row['kamers'];

    while ($row = $resultset->fetch_assoc()) {
        $idhuis = $row['idhuis'];
        $stories = $row['verdiepingen'];
        $width = $row['breedte'];
        $height = $row['hoogte'];
        $depth = $row['diepte'];
        $price = $row['prijs'];
        $type = $row['woningtype_idwoningtype'];
        $status = $row['woningstatus_idwoningstatus'];
        $resident = $row['woonwijk_idwoonwijk'];
        $rooms = $row['kamers'];
    }
//    }

    echo "<form action='crud-actions.php' method='post'>";
    echo"<input type='hidden' id='update-auth' name='update-auth' value='update-auth'>";
    echo"<input type='hidden' id='old-id' name='old-id' value='$idhuis'>";
    echo "<div class='form-group'>";
    echo "<label for='house-id'>House id:</label>";
    echo "<input type='text' name='house-id' id='house-id' value='$idhuis' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-stories'>House stories:</label>";
    echo "<input type='text' name='house-stories' id='house-stories' value='$stories' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-width'>House width:</label>";
    echo "<input type='text' name='house-width' id='house-width' value='$width' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-height'>House height:</label>";
    echo "<input type='text' name='house-height' id='house-height' value='$height' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-depth'>House depth:</label>";
    echo "<input type='text' name='house-depth' id='house-depth' value='$depth' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-price'>House price:</label>";
    echo "<input type='text' name='house-price' id='house-price' value='$price' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-type'>House type:</label>";
    echo "<input type='text' name='house-type' id='house-type' value='$type' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-status'>House status:</label>";
    echo "<input type='text' name='house-status' id='house-status' value='$status' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-resident'>House resident:</label>";
    echo "<input type='text' name='house-resident' id='house-resident' value='$resident' class='form-control'>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='house-rooms'>House rooms:</label>";
    echo "<input type='text' name='house-rooms' id='house-rooms' value='$rooms' class='form-control'>";
    echo "</div>";
    echo "<button type='submit' class='btn btn-primary mb-2' value=''>Choose action</button>";
    echo "</form>";
}

?>
</body>