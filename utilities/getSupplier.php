<?php
    $userID = $_POST["userID"];
    $con = mysqli_connect("localhost:3309","root","","farmerwebservice");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $sql = "SELECT * FROM sell_crop WHERE SUPPLIER_ID = '$userID'";
    $result = mysqli_query($con, $sql);
    $serial_number = 1;
    while($row = mysqli_fetch_assoc($result)){
        echo 
            "<tr>
                <td>" . $serial_number++ . "</td>
                <td>" . $row["FARMER_ID"] . "</td>
                <td>" . $row["CROP_ID"] . "</td>
                <td>" . $row["CROP_NAME"] . "</td>
                <td>" . $row["AVAILABLE_QUANTITY"] . "</td>
                <td>" . $row["RUPEES"] . "</td>
                <td>" . 
                    "<form action = 'utilities/sellingstatus.php' method = 'POST' target='DummyFrame'>
                        <select name = 'AorR' required>
                        <option value = '--Select--'>--Select--</option>
                        <option value = 'Accepted'>Accept</option>
                        <option value = 'Rejected'>Reject</option>
                        </select>
                    <input type='hidden' name='Farmer_id' value=". $row['FARMER_ID']. ">
                    <input type='hidden' name='Crop_id' value=". $row['CROP_ID']. ">
                    <input type='hidden' name='Supplier_id' value=". $row['SUPPLIER_ID']. ">
                    <input type='submit' name='Update' class='btn btn-danger' value ='Update'> 
                    </form>". "</td>
            </tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
</body>
    <iframe name="DummyFrame" style="display:none;"></iframe>
</html>