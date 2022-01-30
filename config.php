<?php 
ob_start();
date_default_timezone_set("Asia/Kolkata");
try
{
    $con = new PDO("sqlsrv:server = tcp:deepakchowdary.database.windows.net,1433; Database = farmerwebservices", "deepakchowdary-admin", "amma@1205");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e)
{?>
    <script>
        alert("Connection to Database Failed!");
    </script>
<?php
}
?>





