<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croviser</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="../../Croviser/css/style.css"> -->

    <link rel="icon" type="image/x-icon" href="images/favicon.svg">
</head>

<body>

    <!-- Header starts  -->

    <header class="header">
        <img src="../../Croviser/images/logo.png" width="150px">
        <!-- <a href="#" class="logo">CRO<span>VI</span>SER</a> -->
        <nav class="navbar">
            <a href="../../Croviser/index.php">Home</a>
            <a href="../../Croviser/products.php">Crops</a>
            <a href="../../Croviser/about_us.php">About Us</a>
            <a href="../../Croviser/contact_us.php">Contact Us</a>
        </nav>
        <div id="close" class=""></div>
        <div class="icons">
            <div id="menu-bar" class="fas fa-bars"></div>
            <a href="#" class="fas fa-search" id="search-btn"></a>
            <div id="theme-toggler" onclick="darkmode()" class="fas fa-moon"></div>
            <a href="../../Croviser/signIn.php" class="fas fa-user"></a>
            <a href="#" class="fas fa-heart"></a>
        </div>
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder=" Search Product">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </header>
    <!-- Header End -->

    <!-- Secoundary menu start-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light  SecoundaryMenu ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto gap-5">
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle nav-link-hover" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Session
                        </a>
                        <ul class="dropdown-menu subNavDrop" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../../Croviser/includes/season.php?season=<?php echo 'Kharif Crop';?>">Kharif Crop</a></li>
                            <li><a class="dropdown-item" href="../../Croviser/includes/season.php?season=<?php echo 'Rabi Crop';?>">Rabi Crop</a></li>
                            <li><a class="dropdown-item" href="../../Croviser/includes/season.php?season=<?php echo 'Zaid Crop';?>">Zaid Crop</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Botany
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Grain Crops</a></li>
                            <li><a class="dropdown-item" href="#">Beans Crops</a></li>
                            <li><a class="dropdown-item" href="#">Pulse Crops</a></li>
                            <li><a class="dropdown-item" href="#">Fiber Crops</a></li>
                            <li><a class="dropdown-item" href="#">Medicinal Crops</a></li>
                            <li><a class="dropdown-item" href="#">Aromatic Crops</a></li>
                            <li><a class="dropdown-item" href="#">Forage Crops</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Irrigation
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../../Croviser/includes/irrigation.php?irrigation=<?php echo 'Surface';?>">Surface Irrigation</a></li>
                            <li><a class="dropdown-item" href="../../Croviser/includes/irrigation.php?irrigation=<?php echo 'Sprinkler';?>">Sprinkler Irrigation</a></li>
                            <li><a class="dropdown-item" href="../../Croviser/includes/irrigation.php?irrigation=<?php echo 'Drip';?>">Drip Irrigation</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- Secoundary menu end-->
    <!-- script -->
    <script>
        // navbar
        let navbar = document.querySelector('.navbar')

        document.querySelector('#menu-bar').onclick = () => {
            navbar.classList.toggle('active');
        }

        document.querySelector('#close').onclick = () => {
            navbar.classList.remove('active');
        }

        // search form
        let searchForm = document.querySelector('.search-form');

        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle('active');
            shoppingCart.classList.remove('active');
            loginForm.classList.remove('active');
            navbar.classList.remove('active');
        }

        // Light - Dark Mode Changer
        function darkmode() {
            var SetTheme = document.body;
            SetTheme.classList.toggle("active")
            var theme;
            if (SetTheme.classList.contains("active")) {
                theme = "DARK";
            } else {
                theme = "LIGHT";
            }
            // save to localStorage
            localStorage.setItem("PageTheme", JSON.stringify(theme));
            // ensure you convert to JSON like i have done -----JSON.stringify(theme)
        }

        setInterval(() => {
            let GetTheme = JSON.parse(localStorage.getItem("PageTheme"));
          
            if (GetTheme === "DARK") {
                document.body.classList = "active";
            } else {
                document.body.classList = "";
            }
        }, 5);
    </script>