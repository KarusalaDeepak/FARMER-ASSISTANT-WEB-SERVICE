<?php
    $supplier_id = $_POST['u'];
    $crop_id = $_POST['i'];
    $crop_name = $_POST['k'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "farmer.css">
    <title>SELL CROP</title>
</head>
<body>
    <div id = "head"><h1><b>FARMER</b></h1></div>
    <div>
        <ul class = "navigation">        
            <li><a href="farmer.php">Crop Advertisement</a></li>
            <li><a href="farmer.php">Buying Status</a></li>
            <li><a href="farmer.php">Farming Tips</a></li>
            <li><a href="farmer.php">Complaint Page</a></li>
            <li><a href="farmer.php">View Complaint Status</a></li>
            <li><a href="farmer.php">Logout</a></li>
        </ul>
    </div>

    <div class = "SellCrop" id = "SellCrop">
        <h3>Sell Crop</h3>
        <form action = "utilities/sellcrop.php" method = "POST" target = "DummyFrame">
            <table style = "color: black;">
                <tr>
                    <td>Supplier ID: </td>
                    <td><input type="text" name = "Supplier_ID" value = "<?php echo $supplier_id;?>" readonly required></td>
                </tr>
                <tr>
                    <td>Farmer ID: </td>
                    <td><input type="text" name = "Farmer_ID" required></td>
                </tr>
                <tr>
                    <td>Crop ID: </td>
                    <td><input type="number" name = "Crop_ID" value = "<?php echo $crop_id;?>" readonly required></td>
                </tr>
                <tr>
                    <td>Crop Name: </td>
                    <td><input type="text" name = "Crop_Name" value = "<?php echo $crop_name;?>" readonly required></td>
                </tr>
                <tr>
                    <td>Available Quantity:</td>
                    <td><input type="text" name = "Available_Quantity" required></td>
                </tr>
                <tr>
                    <td>Rupees:</td>
                    <td><input type="text" name = "Rupees" required></td>
                </tr>
            </table>
        <br>
        <button> Submit </button>
        </form>
        <div class="alert alert-success" role="alert" style = "display: none; text-align-last: center; color: black;">
        Your information is successfully submitted.!
        </div>
    </div>
    <iframe name="DummyFrame" style="display:none;"></iframe>
</body>
</html>
