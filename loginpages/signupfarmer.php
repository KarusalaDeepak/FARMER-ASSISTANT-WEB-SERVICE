<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php

require_once("../config.php");

$FarmerName = $_POST["FarmerName"];
$FarmerEmail = $_POST["FarmerEmail"];
$FarmerMobileNumber = $_POST["FarmerMobileNumber"];
$FarmerPassword = $_POST["FarmerPassword"];
$FarmerConfirmPassword = $_POST["FarmerConfirmPassword"];
$FarmerID = "F";
$FarmerID .= rand(1, 2000); 
if($FarmerPassword == $FarmerConfirmPassword){
    $query = $con->prepare("INSERT INTO farmer (FARMER_ID, FARMER_NAME, FARMER_PASSWORD, FARMER_EMAIL, FARMER_CONTACT_NUMBER, FARMER_CONFIRM_PASSWORD) VALUES ('$FarmerID', '$FarmerName', '$FarmerPassword', '$FarmerEmail', '$FarmerMobileNumber', '$FarmerConfirmPassword')");
    $query->execute();
    echo "
    <script>
        $('#farmerloginidgenerate',window.parent.document).text('Your ID to login is $FarmerID');
        $('#farmerloginidgenerate',window.parent.document).show();
    </script>
    ";
}
?>

