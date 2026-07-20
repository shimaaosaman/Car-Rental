
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>
<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                }
                else{
                    echo '<script>alert("Enter a correct password")</script>';
                }
            }
            else{
                echo '<script>alert("enter a correct email")</script>';
            }
        }
    }
?>
    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ABHS</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT</a></li>
                    
                    <li><a href="contactus.html">CONTACT</a></li>
                  <li> <button class="adminbtn" style="background:none; "><a href="adminlogin.php" style="color: white; ">Admin Login</a></button></li>
                </ul>
            </div>  
        </div>
        <div class="content">
            <h1><br><span></span></h1>
            <p class="par"><br>
                <br><br>
                 </p>
            <div style=" margin-bottom: 20px;font-size: 30px">
               <h2 style="color: white; ">Welcome to ABHS!</h2>
               <p style="color: white;">Join us today and experience the best services we offer!</p>
            </div>          
            <button class="cn" ><a href="register.php" >JOIN US</a></button>
            <div class="form">
                <h2>Login Here</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="pass" placeholder="Enter Password Here">
                <input class="btnn" type="submit" value="Login" name="login"></input>
                </form>
                <p class="link">Don't have an account?<br>
                <a href="register.php" style="color:red;">Sign up</a> here</a></p>
               
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
