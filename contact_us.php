<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact_us</title>
</head>

<body>
    <?php
    include('includes/header.php');
    ?>
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <form method="POST" enctype="multipart/form-data" onsubmit="return ValidateEmail()" action="validate.php">
            <div class="inputBox">
                <input type="text" placeholder="name" name="u_name">
            </div>
            <div class="inputBox">

                <input type="text" placeholder="email" name="email" id="email">

            </div>
            <div class="inputBox">
                <input type="text" placeholder="number" id="number" name="u_number">
            </div>
            <div class="inputBox">

                <textarea placeholder="message" class="message" name="u_sub"></textarea>
            </div>
            <input type="submit" value="send message" class="btn" name="send">
        </form>

    </section>

    <script>
        function ValidateEmail() {
            const mail = document.getElementById("email");
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            const number = document.getElementById("number");
            var phoneno = /^\d{10}$/;
            if (mail.value.length == "") {
                alert("Email is Required!");
                return false;
            }
            if (number.value.length == "") {
                alert("Mobile Number is Required!");
                return false;
            }
            if (mail.value.match(mailformat)) {
                if (number.value.match(phoneno)) {
                    return true;
                } else {
                    alert("You have entered an invalid Mobile Number");
                    return false;
                }
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
    <?php
include('includes/footer.php');
?>
</body>

</html>