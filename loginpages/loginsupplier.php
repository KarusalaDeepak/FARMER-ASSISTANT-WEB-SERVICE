<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$SupplierID = $_POST["ID"];
$password = $_POST["pwd"];
$query = $con->prepare("SELECT * FROM supplier WHERE SUPPLIER_ID=:SupplierID AND SUPPLIER_PASSWORD=:pwd");
$query->bindParam(":SupplierID", $SupplierID);
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
else if($SupplierID[0] == "S")
{
    echo "
    <script>
        $('.alert-danger', window.parent.document).hide();
        $('.alert-success', window.parent.document).show();
        sessionStorage.setItem('userID','$SupplierID');
        window.parent.location = 'http://localhost/FARMER%20ASSISTANT%20WEB%20SERVICE/supplier.php';
    </script>";
}
?>

