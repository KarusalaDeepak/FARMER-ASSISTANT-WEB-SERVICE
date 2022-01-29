<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<?php
require_once("../config.php");

$Tips = $_POST["FarmingTipsdescription"];

$query = $con->prepare("INSERT INTO farming_tips (TIPS_DESCRIPTION) VALUES ('$Tips')");
$query->execute();
echo "
<script>
    $('.alert-success', window.parent.document).show();
</script>
";
?>
