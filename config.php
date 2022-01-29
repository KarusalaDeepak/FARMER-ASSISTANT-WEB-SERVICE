<?php 
ob_start();
date_default_timezone_set("Asia/Kolkata");
try
{
    $con=new PDO("mysql:dbname=farmerwebservice;host=localhost:3309","root","");
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





