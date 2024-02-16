<?php

include('connect.php');
include('nav.php');
session_start();
$id= $_SESSION['users'];
$pid= $_SESSION['pid'];
if(empty($_SESSION['users'])){
    header('Location:userdash.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Post</title>
    <link rel="stylesheet" href="userpost.css">
    <script src="https://kit.fontawesome.com/524c5a650e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>
</head>

<body>
    <div class="box1">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Total Post</a></li>
                <li><a href="#tabs-2">Trade In</a></li>
                <li><a href="#tabs-3">Trade Out</a></li>
            </ul>
            <div id="tabs-1">
                <div class="box" id="cont">
                    <table class="cont">
                        <tbody class="cards">
                            <?php
                    $query = "SELECT * FROM userpost where admin_approval=1 and userid='$id' ORDER BY pid DESC";
                    $rest = mysqli_query($conn, $query);
                        if($rest){
                            while($row=mysqli_fetch_assoc($rest)){
                                $tp=$row['pid'];
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
                                                <br><p>Rs.".$price."</p>".$street." ".-$ward." ".$city."<br>".$district.", ".$country."<br>
                                                <button><a href='postupdate.php?pdata=".$tp."'>Update</a></button>
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
            <div id="tabs-2">
                <div class="box" id="cont">
                    <table class="cont">
                        <tbody class="cards">
                            <?php
                    $query = "SELECT * FROM userpost where deal=1 and dealerid='$id' ORDER BY pid DESC";
                    $rest = mysqli_query($conn, $query);
                        if($rest){
                            while($row=mysqli_fetch_assoc($rest)){
                                $buy=$row['pid'];
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
                                                <br><p>Rs.".$price."</p>".$street." ".$ward." ".$city."<br>".$district.", ".$country."<br>
                                                <button id='b1'><i class='fa-solid fa-check'></i>Deal</button>
                                                <button id='b2'><a href='cancel.php?pdata=".$buy."'><i class='fa-solid fa-xmark'></i>Cancel</a></button>
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
            <div id="tabs-3">
                <div class="box" id="cont">
                    <table class="cont">
                        <tbody class="cards">
                            <?php
                    $query = "SELECT * FROM userpost where deal=1 and userid='$id' ORDER BY pid DESC";
                    $rest = mysqli_query($conn, $query);
                        if($rest){
                            while($row=mysqli_fetch_assoc($rest)){
                                $sell=$row['pid'];
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
                                                <br><p>Rs.".$price."</p>".$street." ".$ward." ".$city."<br>".$district.", ".$country."<br>
                                                <button id='b1'><a href='confirmdeal.php?pdata=".$sell."'><i class='fa-solid fa-check'></i>Accept</button>
                                                <button id='b2'><a href='cancel.php?pdata=".$sell."'><i class='fa-solid fa-xmark'></i>Reject</a></button>
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
        </div>
    </div>
</body>

</html>