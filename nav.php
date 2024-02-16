<?php

include('connect.php');
// session_start();
// $id= $_SESSION['users'];
// if(empty($_SESSION['users'])){
//     header('Location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="nav.css">
    <script src="https://kit.fontawesome.com/524c5a650e.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="navi">
            <div class="name">
                <p class="logo">Find<span class="nep">Room</span></h1>
                <p class="com"><span>.com</span></p>
            </div>
            <div class="home">
                <a href="userdash.php"><i class="fa-solid fa-house"></i>Home</a>
            </div>
            <div class="btn">
                <div class="src">
                    <button>
                        <a href="search.php">Go to Search<i class="fa-solid fa-magnifying-glass"></i></a>
                    </button>
                </div>
            </div>
            <div class="pot" id="pot">
                <ul class="bb">
                    <li><a href="userprofile.php"><i class="fa-solid fa-user"></i>User</a></li>
                    <li><a href="userpost.php"><i class="fa-solid fa-pen-to-square"></i>Post</a></li>
                    <li><a href="help.php"><i class="fa-solid fa-circle-question"></i>Help</a></li>
                    <li><a href="setting.php"><i class="fa-solid fa-gear"></i>Others</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-power-off"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>