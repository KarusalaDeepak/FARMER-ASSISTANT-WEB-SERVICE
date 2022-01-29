<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$complaintstatus = $_POST["Status_Type"];
$complaintnumber = $_POST["complaint_number"];
$query = $con->prepare("UPDATE complaint_page SET COMPLAINT_STATUS = '$complaintstatus' WHERE COMPLAINT_NUMBER = :complaintnumber");
$query->bindParam(":complaintnumber", $complaintnumber);
$query->execute();
echo "
<script>
    $('.alert-success', window.parent.document).show();
</script>
";
?>
