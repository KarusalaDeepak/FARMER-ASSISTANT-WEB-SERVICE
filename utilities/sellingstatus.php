<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$sellingstatus = $_POST["AorR"];
$Farmerid = $_POST["Farmer_id"];
$SupplierID = $_POST["Supplier_id"];
$Cropid = $_POST["Crop_id"];
$query = $con->prepare("UPDATE sell_crop SET SELLING_STATUS = '$sellingstatus' WHERE FARMER_ID = :Farmerid AND CROP_ID =:Cropid AND SUPPLIER_ID = :Supplierid");
$query->bindParam(":Farmerid", $Farmerid);
$query->bindParam(":Supplierid", $SupplierID);
$query->bindParam(":Cropid", $Cropid);
$query->execute();
echo "
<script>
    $('.alert-success', window.parent.document).show();
</script>
";
?>
