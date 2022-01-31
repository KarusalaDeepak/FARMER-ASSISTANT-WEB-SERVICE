<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>ADMIN</title>
</head>

<body>
    <div id="head">
        <h1><b>ADMIN</b></h1>
    </div>
    <div>
        <ul class="navigation">
            <li id="ViewFarmerButton"><a href="#">View Farmer</a></li>
            <li id="ViewSupplierButton"><a href="#">View Supplier</a></li>
            <li id="ViewComplaintButton"><a href="#">View Complaint</a></li>
            <li id="GiveFarmingTipsButton"><a href="#">Give Farming Tips</a></li>
            <li><button id = "LogoutButton" style = "margin:0px; background-color:transparent; font-size:large;">Logout</button></li>
        </ul>
    </div>

    <div id="heading">
        <h1>WE CELEBRATE THE JOY OF<br>AGRICULTURE</h1>
    </div>

    <div class="ViewFarmer" id="ViewFarmer" style="display:none;">
        <h3>View Farmer</h3>
        <style>
            #tta {
                border-collapse: collapse;
                width: 50%;
                color: #588c7e;
                font-family: 'Roboto', sans-serif;
                text-align: center;
                margin-left: 25%;
            }
            #tta th {
                background-color: crimson;
                color: white;
                text-align: center;
            }
            #tta tr:nth-child(even) {
                background-color: #f2f2f2
            }
        </style>
        
        <table id = "tta">
            <tr>
                <th>S.No</th>
                <th>Farmer ID</th>
                <th>Farmer Name</th>
                <th>Farmer Email ID</th>
                <th>Farmer Mobile Number</th>
                <th>Delete Farmer</th>
            </tr>

            <?php
                $query = $con->prepare("SELECT * FROM farmer ORDER BY FARMER_ID ASC");
                $query->execute();
                $sqldata=$query->fetchAll(PDO::FETCH_ASSOC);
                $serial_number = 1;
                foreach($sqldata as $row){
                    echo 
                        "<tr>
                            <td>" . $serial_number++ . "</td>
                            <td>" . $row["FARMER_ID"]. "</td>
                            <td>" . $row["FARMER_NAME"] . "</td>
                            <td>" . $row["FARMER_EMAIL"] . "</td>
                            <td>" . $row["FARMER_CONTACT_NUMBER"] . "</td>
                            <td>" .
                                "<form action = 'utilities/deletefarmer.php' method = 'POST' target='DummyFrame'>
                                <input type='hidden' name='id' value=". $row['FARMER_ID']. ">
                                <input type='submit' name='delete' class='btn btn-danger' value='DELETE' style = 'background-color: red; color:yellow'> 
                                </form>" . "</td>
                        </tr>";
                    }
            ?>
        </table>
    </div>

    <div class="ViewSupplier" id="ViewSupplier" style="display:none;">
        <h3>View Supplier</h3>
        <table id = "tta">
            <tr>
                <th>S.No</th>
                <th>Supplier ID</th>
                <th>Supplier Name</th>
                <th>Supplier Email ID</th>
                <th>Supplier Mobile Number</th>
                <th>Delete Supplier</th>
            </tr>
            <?php
                $query2 = $con->prepare("SELECT * FROM supplier ORDER BY SUPPLIER_ID ASC");
                $query2->execute();
                $sqldata2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                $serial_number = 1;
                foreach($sqldata2 as $row){
                    echo 
                        "<tr>
                            <td>" . $serial_number++ . "</td>
                            <td>" . $row["SUPPLIER_ID"]. "</td>
                            <td>" . $row["SUPPLIER_NAME"] . "</td>
                            <td>" . $row["SUPPLIER_EMAIL"] . "</td>
                            <td>" . $row["SUPPLIER_CONTACT_NUMBER"] . "</td>
                            <td>" .
                                "<form action = 'utilities/deletesupplier.php' method = 'POST' target='DummyFrame'>
                                <input type='hidden' name='id' value=". $row['SUPPLIER_ID']. ">
                                <input type='submit' name='delete' class='btn btn-danger' value='DELETE' style = 'background-color: red; color:yellow'> 
                                </form>" . "</td>
                        </tr>";
                    }
            ?>
        </table>
    </div>

    <div class="ViewComplaint" id="ViewComplaint" style="display:none;">
        <h3>View Complaint</h3>
        <table id = "tta">
            <tr>
                <th>Complaint Number</th>
                <th>Farmer ID</th>
                <th>Complaint Type</th>
                <th>Complaint Description</th>
                <th>Status</th>
            </tr>
            <?php
                $query3 = $con->prepare("SELECT * FROM complaint_page ORDER BY COMPLAINT_NUMBER ASC");
                $query3->execute();
                $sqldata3 = $query3->fetchAll(PDO::FETCH_ASSOC);
                foreach($sqldata3 as $row){
                    echo 
                        "<tr>
                            <td>" . $row["COMPLAINT_NUMBER"]. "</td>
                            <td>" . $row["FARMER_ID"] . "</td>
                            <td>" . $row["COMPLAINT_TYPE"] . "</td>
                            <td>" . $row["COMPLAINT_DESCRIPTION"] . "</td>
                            <td>" . 
                                "<form action = 'utilities/complaintstatus.php' method = 'POST' target='DummyFrame'>
                                    <select name = 'Status_Type' required>
                                    <option value = '--Select--'>--Select--</option>
                                    <option value = 'Read'>Read</option>
                                    <option value = 'Solved'>Solved</option>
                                    </select>
                                <input type='hidden' name='complaint_number' value=". $row['COMPLAINT_NUMBER']. ">
                                <input type='submit' name='Update' class='btn btn-danger' value='Update'> 
                                </form>". "</td>
                        </tr>";
                    }
            ?>
        </table>
        <div class='alert alert-success' role='alert' style = 'display: none; text-align: center; color: black;'>
        Status updated Successfully!
        </div>
    </div>

    <div class="GiveFarmingTips" id="GiveFarmingTips" style="display:none;">
        <h3>Give Farming Tips</h3>
        <form action="utilities/givefarmingtips.php" method="POST" target="DummyFrame">
            <table style = "width:70px; color:black; margin-left:700px;">
                <tr>
                    <td>Farming Tips:</td>
                    <td><textarea rows='6' cols='25' name="FarmingTipsdescription" placeholder="Enter Description here...." required></textarea></td>
                </tr>
            </table>
            <br>
            <button style = "margin-left:760px;"> Submit </button>
        </form>
        <div class="alert alert-success" role="alert" style = "display: none; text-align-last: center; color: black;">
        Farming tip is given succefully!
        </div>
    </div>

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
        if(sessionStorage.getItem("userID") == null)
        {
            $('html').html("");
        }
        $('#ViewFarmerButton').on('click', function () {
            $('#heading').hide();
            $('#GiveFarmingTips').hide();
            $('#ViewSupplier').hide();
            $('#ViewComplaint').hide();
            $('#ViewFarmer').show();
        });
        $('#ViewSupplierButton').on('click', function () {
            $('#heading').hide();
            $('#ViewFarmer').hide();
            $('#GiveFarmingTips').hide();
            $('#ViewComplaint').hide();
            $('#ViewSupplier').show();
        });
        $('#ViewComplaintButton').on('click', function () {
            $('#heading').hide();
            $('#ViewFarmer').hide();
            $('#ViewSupplier').hide();
            $('#GiveFarmingTips').hide();
            $('#ViewComplaint').show();
        });
        $('#GiveFarmingTipsButton').on('click', function () {
            $('#heading').hide();
            $('#ViewFarmer').hide();
            $('#ViewSupplier').hide();
            $('#ViewComplaint').hide();
            $('#FarmingTips').show();
            $('#GiveFarmingTips').show();
        });      
        $('#LogoutButton').on('click', function() {
            sessionStorage.clear();
            window.location = '../index.html';
        });
    </script>
    <iframe name="DummyFrame" style="display:none;"></iframe>
</body>
</html>
