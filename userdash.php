<?php

include('connect.php');

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "findroom";
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        $filename= $_FILES["image"]["name"];
        $tempname= $_FILES["image"]["tmp_name"];
        $folder ="images/".$filename;

        move_uploaded_file($tempname, $folder);
        $area = $_POST['street'];
        $wd =$_POST['ward'];
        $ct = $_POST['city'];
        $dist = $_POST['district'];
        $st =$_POST['state'];
        $ctry =$_POST['country'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO userpost( images, street, ward, city, district, states, country) VALUES ('$folder', '$area', '$wd', '$ct', '$dist', '$st', '$ctry')";

    if ($conn->query($sql) === TRUE) {
        header('location:userdash.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dash</title>
    <link rel="stylesheet" href="table.css">
    <script>
        function create() {
            var upload = document.getElementById('upload');
            var cont = document.getElementById('cont');
            if ((upload.style.display = 'none') && (cont.style.display != 'none')) {
                upload.style.display = 'block';
                cont.style.display = 'none';
            }
            else {
                upload.style.display = 'none';
            }
        }

        function validateForm() {
            var a = document.forms["myForm"]["street"].value;
            var b = document.forms["myForm"]["ward"].value;
            var c = document.forms["myForm"]["city"].value;
            var d = document.forms["myForm"]["district"].value;
            var e = document.forms["myForm"]["state"].value;
            var f = document.forms["myForm"]["country"].value;
            var g = document.forms["myForm"]["image"].value;
            if (a == "") {
                alert("Street cannot be empty");
                return false;
            }
            else if (b == "") {
                alert("Ward cannot be empty");
                return false;
            }
            else if (c == "") {
                alert("City cannot be empty");
                return false;
            }
            else if (d == "") {
                alert("District cannot be empty");
                return false;
            }
            else if (e == "") {
                alert("State cannot be empty");
                return false;
            }
            else if (f == "") {
                alert("Country cannot be empty");
                return false;
            }
            else if (g == "") {
                alert("File cannot be empty");
                return false;
            }
            else {
                alert("Post uploaded successfully");
            }
        }
        function cancel() {
            var upload = document.getElementById('upload');
            if (upload.style.display != 'none') {
                upload.style.display = 'none';
            }
        }

    </script>

</head>

<body>
    <div class="create" id="create">
        <p>Create post:</p>
        <input type="button" value="Create" onclick="create()">
    </div>
    <div class="upload" id="upload">
        <form name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="off" autosuggestion="off">
            <div class="top">
                Create Post
            </div>
            <div class="details">
                <div class="right">
                    <label class="a">District</label>
                    <input type="text" name="district">
                    <label class="a">State</label>
                    <input type="text" name="state">
                    <label class="a">Country</label>
                    <input type="text" name="country">
                </div>
                <div class="left">
                    <label class="a">Area or street</label>
                    <input type="text" name="street">
                    <label class="a">Ward number</label>
                    <input type="text" name="ward">
                    <label class="a">City</label>
                    <input type="text" name="city">
                </div>
                <label class="file" for="input-file">Upload image</label>
                <input type="file" accepts="image/jpeg, image/png, image/jpg" id="input-file" name="image">
                <div class="below">
                    <input class="cnc" type="button" value="Cancel" onclick="cancel()">
                    <button type="submit">Post</button>
                </div>
            </div>
        </form>
    </div>

    <div class="box" id="cont">
        <table border="1" class="cont">
            <tbody>
                <?php
        
                        $sql = "SELECT * FROM userpost";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                $image =$row['images'];
                                $street =$row['street'];
                                $ward =$row['ward'];
                                $city =$row['city'];
                                $district =$row['district'];
                                $state =$row['states'];
                                $country =$row['country'];
                        echo "<tr>
                        <td>
                            <div class='post'>
                                <div class='img'>
                                    ".$image."
                                </div>
                                <div class='des'>
                                    ".$street." ".-$ward." ".$city."<br>".$district.", ".$state." ".$country."<br><button type='submit'>Make Deal</button>
                                </div>
                            </div>
                        </td>
                        </tr>";   
                            }
                        }                        
                    ?>
            </tbody>
        </table>
    </div>
</body>

</html>
