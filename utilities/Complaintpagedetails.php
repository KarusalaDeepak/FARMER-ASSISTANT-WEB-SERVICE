<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$FarmerID = $_POST["Farmer_ID"];
$ComplaintID = $_POST["Complaint_ID"];
$ComplaintType = $_POST["Complaint_Type"];
$Complaintdescription = $_POST["Complaintdescription"];

$query = $con->prepare("INSERT INTO complaint_page (FARMER_ID, COMPLAINT_NUMBER, COMPLAINT_TYPE, COMPLAINT_DESCRIPTION) VALUES ('$FarmerID', '$ComplaintID', '$ComplaintType', '$Complaintdescription')");
$query->execute();
echo "
<script>
    $('.alert-success', window.parent.document).show();
</script>
";
?>
