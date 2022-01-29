<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$SupplierID = $_POST["Supplier_ID"];
$CropID = $_POST["Crop_ID"];
$CropName = $_POST["Crop_Name"];
$RequiredQuantity = $_POST["Required_Quantity"];

$query = $con->prepare("INSERT INTO crop_advertisement (SUPPLIER_ID, CROP_ID, CROP_NAME, REQUIRED_QUANTITY) VALUES ('$SupplierID', '$CropID', '$CropName', '$RequiredQuantity')");
$query->execute();
echo "
<script>
    $('.alert-success', window.parent.document).show();
</script>
";
?>
