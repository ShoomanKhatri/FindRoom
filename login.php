<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['email'];
    $pass=$_POST['password'];
    $check =$_POST['utype'];

    $sql = "SELECT * FROM users WHERE email='$name' && pass='$pass' && utype='$check' && Access =1";
    $result = mysqli_query($conn, $sql);
    if($result){
        $num =mysqli_num_rows($result);
        {
            if($num>0){
                    echo "<script> alert('Login successful');</script>;";
                    if ($check === 'Admin') {
                        session_start();
                        $_POST['email']=$name;
                        $data =mysqli_fetch_array($result);
                        $id=$data['uid'];
                        $_SESSION['users'] = $id;
                        header('Location:admin.php');
                    } else {
                        session_start();
                        $_POST['email']=$name;
                        $data =mysqli_fetch_array($result);
                        $id=$data['uid'];
                        $_SESSION['users'] = $id;
                        header('Location:userdash.php');
                    }
                }
                else{
                    echo "<script> alert('Invalid Entry!');</script>;";
                }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/524c5a650e.js" crossorigin="anonymous"></script>
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

    <div class="box">
        <form action="" method="POST" autocomplete="off" autosuggestion="off">
            <img src="rantel.png" alt="logo">
            <i class="fa-regular fa-user"></i>
            <div class="top">
                <p class="ar">Login To Portal</p>
            </div>
            <div class="msg">
                <p class="foremail">Enter your email and password to login to Web-Portal</p>
            </div>
            <div class="ib">
                <input type="text" name="email" id="email" placeholder="Enter your email" required>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="check">
                <label for="utype">Access type:</label>
                <select name="utype" required>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
            <a class="forget" href="forget.php">Forget password ?</a>
            <button type="submit" value="submit" name="submit">Login</button>
            <p class="dont">Don't have an account ? <a class="sign" href="signup.php">Signup</a></p>
        </form>
    </div>
</body>

</html>