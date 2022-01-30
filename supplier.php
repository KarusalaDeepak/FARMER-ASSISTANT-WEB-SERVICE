<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "supplier.css">
    <title>SUPPLIER</title>
</head>
<body>
    <div id = "head"><h1><b>SUPPLIER</b></h1></div>
    <div>
        <ul class = "navigation">        
            <li id = "PostAdvertisementButton"><a href="#">Post Advertisement</a></li>
            <li id = "CropReceivedButton"><a href="#">Crop Received</a></li>
            <li><button id = "LogoutButton" style = "background-color:transparent; font-size:large; align-items: center; margin-left:0px !important; text-align-last: center !important;">Logout</button></li>
        </ul>
    </div>

    <div id = "heading"><h1>WE CELEBRATE THE JOY OF<br>AGRICULTURE</h1></div>

    <div class = "PostAdvertisement" id = "PostAdvertisement" style = "display:none;">
        <h3>Post Your Advertisement</h3>
        <form action = "utilities/advertisementdetails.php" method = "POST" target="DummyFrame">
            <table style = "margin-left:650px">
                <tr>
                    <td>Supplier ID:</td>
                    <td><input type="text" name = "Supplier_ID" required></td>
                </tr>
                <tr>
                    <td>Crop ID: </td>
                    <td><input type="number" name = "Crop_ID" required></td>
                </tr> <tr>
                    <td>Crop Name:</td>
                    <td><input type="text" name = "Crop_Name" required></td>
                </tr>
                <tr>
                    <td>Required Quantity:</td>
                    <td><input type="text" name = "Required_Quantity" required></td>
                </tr>
            </table>
            <br>
            <button style = "text-align-last:center; margin-left: 750px;">Submit</button>
        </form>
        <div class="alert alert-success" role="alert" style = "display: none; text-align-last: center; color: black;">
        Your post is succefully advertised!
        </div>
    </div>

    <div class = "CropReceived" id = "CropReceived" style = "display:none;">
        <h3>Crop Received</h3>
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
                <th>Crop ID</th>
                <th>Crop Name</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Accept/Reject</th>
            </tr>
        </table>
        <div class='alert alert-success' role='alert' style = 'display: none; text-align-last: center; color: black;'>
        Status updated Successfully!
        </div>
    </div>

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
        if(sessionStorage.getItem("userID") == null)
        {
            $('html').html("");
        }
        if(sessionStorage.getItem('userID')!=null)
        {
            console.log(sessionStorage.getItem('userID'));
            $.ajax({
                type:"POST",
                url:"utilities/getSupplier.php",
                data: {userID:sessionStorage.getItem('userID')},
                dataType:"html",
                success: function(data)
                {
                    console.log(data);
                    $("#tta").append(data);
                }
            });
        }
        $('#PostAdvertisementButton').on('click', function() {
            $('#heading').hide();
            $('#CropReceived').hide();
            $('#PostAdvertisement').show();
        });  
        $('#CropReceivedButton').on('click', function() {
            $('#heading').hide();
            $('#PostAdvertisement').hide();
            $('#CropReceived').show();
        });  
        $('#LogoutButton').on('click', function() {
            sessionStorage.clear();
            window.location = '../index.html';
        });
    </script>
    <iframe name="DummyFrame" style="display:none;"></iframe>
</body>
</html>
