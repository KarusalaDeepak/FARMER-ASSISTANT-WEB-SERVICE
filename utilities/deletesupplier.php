<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$SupplierID = $_POST["id"];
$query = $con->prepare("DELETE FROM supplier WHERE SUPPLIER_ID=:SupplierID");
$query->bindParam(":SupplierID", $SupplierID);
$query->execute();
    echo "
        <script>  
            window.parent.location.reload();
        </script>
    ";
?>
	

