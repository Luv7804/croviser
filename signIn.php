<?php
$host = "localhost";
$user = "root";
        //username which provided by XAMPP.
$password = "";
        // Password is blank (in XAMPP).
$db = "croviser";
        //name of the database.
session_start();
//creates a session
$con = mysqli_connect($host,$user,$password,$db); //connect my sql database.
if($con === false) // if connection failed.
{
    die("connection error");
    // print message and exit from the current php script.

}
mysqli_select_db($con,$db);


//Ragistration
if(isset($_POST['signup'])) //if user clicked on Sign Up button after activeate this condition.
        //super global variable  to collect  form data after submiting form  with method ="post".
                // name of the Sign Up feild.
{
    $emailid = $_POST['emailid']; //fetch data which user write in form.
    //var name any name can take
                    // name attribute of perticuler feild.
    $username = $_POST['username'];
    echo "$username";
    $password = $_POST['password'];
    echo "$password";

    $insertdata = "insert into loginform(emailid,username,password) values ('$emailid','$username','$password')";
    //insert data into database
    mysqli_query($con,$insertdata);
}
//login
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = " select * from loginform where username = '".$username."' AND password = '".$password."' ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if($row["usertype"] == "user") //login for user.
    {
        $_SESSION["username"] = $username;
        header("location:index.php");
    }
    else if ($row["usertype"] == "admin") // login for admin.
    {
        $_SESSION["username"] = $username;
        header("location:admin/index.php");
    }
    else
    {
        echo "Username or password incorrect";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Sign In & Sign Up</title>
</head>
<body>
    <div class="login">
        <div class="login__content">
                <div class="login__forms">
<!-- Sign In -->
                <form action="../Croviser/index.php" method="POST" class="login__registre" id="login-in">
                    <h1 class="login__title">Sign In</h1>
                    <div class="login__box">
                    <i class="fas fa-user login__icon" ></i>
                        <input type="text" name="username" placeholder="Username" class="login__input">
                    </div>
                    <div class="login__box">
                        <i class="fas fa-lock login__icon" ></i>
                        <input type="password" name="password" placeholder="Password" class="login__input">
                    </div>
                    <a href="#" class="login__forgot">Forgot password?</a>
                    <input type="submit" value="Sign In" class="login__button">
                    <div>
                        <span class="login__account">Don't have an Account ?</span>
                        <span class="login__signin" id="sign-up">Sign Up</span>
                    </div>
                </form>

<!-- Sign Up -->

                <form action="validate.php" method="POST" enctype="multipart/form-data" class="login__create none" onsubmit ="return validate()" id="login-up">
                    <h1 class="login__title">Create Account</h1>

                    <div class="login__box">
                        <i class="fas fa-envelope login__icon"></i>

                        <input type="text" class="login__input" name="email" placeholder="Email Id" required>
                    </div>

                    <div class="login__box">
                        <i class="fas fa-user login__icon"></i>
                        <input type="text" class="login__input" name="username" placeholder="User Name" required>
                    </div>

                    <div class="login__box">

                        <i class="fas fa-lock login__icon"></i>
                        <input type="password" class="login__input" name="password" placeholder="Enter your Password "
                            required>

                    </div>

                    <div class="login__box">

                        <i class="fas fa-lock login__icon"></i>
                        <input type="password" class="login__input" name="password2" placeholder="Enter your Password "
                            required>

                    </div>

                    <input type="submit" name="signup" value="Sign Up" class="login__button">

                    <div>
                        <span class="login__account">Already have an Account ?</span>
                        <span class="login__signup" id="sign-in">Sign In</span>
                    </div>

                    <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google'></i></a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        function Validate() {
            const mail = document.getElementById("email");
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (mail.value.length == "") {
                alert("Email is Required!");
                return false;
            }
           
            if (mail.value.match(mailformat)) {
              
                alert("Valid email address!");
                document.form1.text1.focus();
                return true;
            } else {
                alert("You have entered an invalid email address!");
                document.form1.text1.focus();
                return false;
            }
        }
    </script>

    <!--===== MAIN JS =====-->
    <script src="js/main.js"></script>
</body>

</html>