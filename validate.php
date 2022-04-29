<?php
include('includes/header.php');
?>
<?php
$email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
?>
    <script>
      alert("Email is required")
    </script><?php
            } else {
              $email = test_input($_POST["email"]);
              // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              ?>

      <script>
        alert("Invalid email format");
      window.location.href = "contact_us.php";

      </script><?php
              }
            }
          }

          function test_input($data)
          {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

          $servername = "localhost";
          $username = "root";
          $password = "";

          // Create connection
          $conn =  mysqli_connect($servername, $username, $password, "croviser");
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          if (isset($_POST['send'])) {
            $name = $_POST['u_name'];
            $email = $_POST['email'];
            $number = $_POST['u_number'];
            $sub = $_POST['u_sub'];

            $date = date("Y-m-d");
            $time = date("H:i:s");

            $insert = mysqli_query($conn, "INSERT into contact_us (name,email,number,message,date,time) values ('$name', '$email', '$number', '$sub','$date','$time') ");
            if ($insert) {
                ?>
    <script>
      window.location.href = "index.php";
    </script>
<?php
            }
          }
?>