<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$FarmerID = $_POST["ID"];
$password = $_POST["pwd"];
$query = $con->prepare("SELECT * FROM farmer WHERE FARMER_ID=:FarmerID AND FARMER_PASSWORD=:pwd");
$query->bindParam(":FarmerID", $FarmerID);
$query->bindParam(":pwd", $password);
$query->execute();
if($query->rowCount()==0)
{
    echo "
    <script>
        $('.alert-success', window.parent.document).hide();
        $('.alert-danger', window.parent.document).show();
    </script>
    ";
}
else if($FarmerID[0] == "F")
{
    echo "
    <script>
        $('.alert-danger', window.parent.document).hide();
        $('.alert-success', window.parent.document).show();
        sessionStorage.setItem('userID','$FarmerID');
        window.parent.location = 'http://localhost/FARMER%20ASSISTANT%20WEB%20SERVICE/farmer.php';
    </script>";
}
?>

