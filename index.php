<?php

include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/524c5a650e.js" crossorigin="anonymous"></script>
    </script>
    <script>
        
        </script>
</head>

<body>
    <nav>
        <div class="logo">
            <p class="h">Find<span>Room</span><span class="nep">.com</span></p>
        </div>
        <div class="let">
            <ul class="pc">
                <li><a href="index.php">Homepage</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </nav>
    <div class="ourmessage">
        <p class="applications">
            <span class="f">Find</span><span class="r">Room</span><span class="c">.com</span> is developed to make it easier for our users to search & post the details about the room they seek or want to give on rent. It is applicable for all kind of users who have user access. Our application is only available for browser.
        </p>
    </div>
    <div class="box" id="cont">
        <table class="cont">
            <tbody class="cards">
                <?php
                    $query = "SELECT * FROM userpost where admin_approval=1 ORDER BY pid DESC";
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
                                                <br><p>Rs.$price.</p>".$street."-".$ward." ".$city."<br>".$district.", ".$country."<br>
                                                <button><a href='login.php'>Make a deal</a></button>
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