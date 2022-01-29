<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$AdminID = $_POST["ID"];
$password = $_POST["pwd"];
$query = $con->prepare("SELECT * FROM admins WHERE ADMIN_ID=:AdminID AND ADMIN_PASSWORD=:pwd");
$query->bindParam(":AdminID", $AdminID);
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
else if($AdminID[0] == "A")
{
    echo "
    <script>
        $('.alert-danger', window.parent.document).hide();
        $('.alert-success', window.parent.document).show();
        sessionStorage.setItem('userID','$AdminID');
        window.parent.location = 'http://localhost/FARMER%20ASSISTANT%20WEB%20SERVICE/admin.php';
    </script>";
}
?>

