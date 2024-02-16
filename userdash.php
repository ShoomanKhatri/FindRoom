<?php

include('connect.php');
include('nav.php');
session_start();
$id= $_SESSION['users'];
$details ="SELECT * FROM users WHERE uid='$id'";
$test = mysqli_query($conn, $details);
$row=mysqli_fetch_assoc($test);
$_SESSION['username']= $row['username'];
$_SESSION['useremail']= $row['email'];
$_SESSION['userphone']= $row['phone'];
if(empty($_SESSION['users'])){
    header('Location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dash</title>
    <link rel="stylesheet" href="user.css">
    <script src="https://kit.fontawesome.com/524c5a650e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="para">
        <div class="create" id="create">
            <button onclick="create()"><a href="create.php">Create post </a></button>
        </div>

        <div class="box" id="cont">
            <table class="cont">
                <tbody class="cards">
                    <?php
                    $query = "SELECT * FROM userpost where admin_approval=1 && deal=0 ORDER BY pid DESC";
                    $rest = mysqli_query($conn, $query);
                        if($rest){
                            while($row=mysqli_fetch_assoc($rest)){
                                $pid=$row['pid'];
                                $price=$row['price'];
                                $image =$row['images'];
                                $street =$row['street'];
                                $ward =$row['ward'];
                                $city =$row['city'];
                                $district =$row['district'];
                                $country =$row['country'];
                                    echo "<tr>
                                        <td>
                                            <div class='post'>
                                                <div class='img'>
                                                <img src='".$image."' width='280px' height='200px'>
                                                </div>
                                                <div class='des'>
                                                <br><p>Rs.".$price."</p>".$street." ".-$ward." ".$city."<br>".$district.", ".$country."<br><form method='POST'>
                                                <button name='deal'><a href='dealbox.php?db=".$pid."'>Make a deal</a></button></form>
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
    </div>
</body>

</html>