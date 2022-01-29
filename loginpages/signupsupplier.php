<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php

require_once("../config.php");

$SupplierName = $_POST["SupplierName"];
$SupplierEmail = $_POST["SupplierEmail"];
$SupplierMobileNumber = $_POST["SupplierMobileNumber"];
$SupplierPassword = $_POST["SupplierPassword"];
$SupplierConfirmPassword = $_POST["SupplierConfirmPassword"];
$SupplierID = "S";
$SupplierID .= rand(1, 2000); 
if($SupplierPassword == $SupplierConfirmPassword){
    $query = $con->prepare("INSERT INTO supplier (SUPPLIER_ID, SUPPLIER_NAME, SUPPLIER_PASSWORD, SUPPLIER_EMAIL, SUPPLIER_CONTACT_NUMBER, SUPPLIER_CONFIRM_PASSWORD) VALUES ('$SupplierID', '$SupplierName', '$SupplierPassword', '$SupplierEmail', '$SupplierMobileNumber', '$SupplierConfirmPassword')");
    $query->execute();
    echo "
    <script>
        $('#supplierloginidgenerate',window.parent.document).text('Your ID to login is $SupplierID');
        $('#supplierloginidgenerate',window.parent.document).show();
    </script>
    ";
}
?>
