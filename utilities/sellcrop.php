<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$SupplierID = $_POST["Supplier_ID"];
$FarmerID = $_POST["Farmer_ID"];
$CropID = $_POST["Crop_ID"];
$CropName = $_POST["Crop_Name"];
$AvailableQuantity = $_POST["Available_Quantity"];
$Rupees = $_POST["Rupees"];

$query = $con->prepare("INSERT INTO sell_crop (SUPPLIER_ID, FARMER_ID, CROP_ID, CROP_NAME, AVAILABLE_QUANTITY, RUPEES) VALUES ('$SupplierID', '$FarmerID', '$CropID', '$CropName', '$AvailableQuantity', '$Rupees')");
$query->execute();
echo "
<script>
    $('.alert-success', window.parent.document).show();
</script>
";
?>
