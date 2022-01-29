<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$FarmerID = $_POST["id"];
$query = $con->prepare("DELETE FROM farmer WHERE FARMER_ID=:FarmerID");
$query->bindParam(":FarmerID", $FarmerID);
$query->execute();
    echo "
        <script>  
            window.parent.location.reload();
        </script>
    ";
?>

