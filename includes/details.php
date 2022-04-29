<?php
include('../includes/db.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" href="../../Croviser/css/style.css"> -->

</head>

<body>
  <?php
  $id =  $_GET['id'];
  echo $id;
  $get_prd = "select * from crop where cropid = $id  order by rand() limit 0,6";
  $run_prd = mysqli_query($con, $get_prd);
  ?><section class="detailcontainer">
    <?php
    while ($row_prd = mysqli_fetch_array($run_prd)) {
    ?>
      <div class="image">
        <?php
        $product_img1 = $row_prd['crop_img1'];
        echo '<img src="data:image/png;base64,' . base64_encode($row_prd['crop_img1']) . '" width="500px"class = "crop_img1">';
        $crop_title = $row_prd['cropname'];
        $crop_cat = $row_prd['category'];

        // echo " <div class='price'>$prd_title</div>";
        echo " <h1 class ='title'>$crop_title</h1>";
        // echo " <h3> Season : $crop_cat</h3>";
        
        ?>
      </div>
      <div class="content">
        <?php
      echo "<h1>Category</h1>";
        echo " <h3>$crop_cat</h3>";
        echo "<hr>";
      $crop_irrigation = $row_prd['irrigation'];
      echo "<h1>Irrigation :</h1>";
      echo "<p>$crop_irrigation</p>";
      echo "<hr>";
      $crop_climatesoil = $row_prd['climatesoil'];
      echo "<p>$crop_climatesoil</p>";
      echo "<hr>";

      $seed = $row_prd['seed'];
      echo "<h3>$seed</h3>";
      echo "<hr>";
      $sowing = $row_prd['sowing'];
      echo "<p>$sowing</p>";
      echo "<hr>";
      $fertilizer = $row_prd['fertilizer'];
      echo "<p>$fertilizer</p>";
      echo "<hr>";
      $pestiside = $row_prd['pestiside'];
      echo "<p>$pestiside</p>";
      echo "<hr>";

      $harvesting = $row_prd['harvesting'];
      echo "<p>$harvesting</p>";

      // $fertilizer = $row_prd['fertilizer'];
    }
      ?>
</body>

</html>

