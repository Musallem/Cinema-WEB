<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Cinema Film Booking Website -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Website</title>
    <!-- LINK CSS FILE -->
    <link rel="stylesheet" href="css/style.css"/>
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- Link Swiper's CSS -->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>
</head>
<body>
    <!-- Navigation Bar (Starts) -->
    <header>
        <a href="#" class="logo">
            <i class='bx bxs-movie'></i> Movies
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- Menu -->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#coming">Coming Soon</a></li>
            <li><a href="#film-search">Search</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<a href='inc/logout-inc.php' class='btn'>Log out</a>";
            }
            else {
                echo "<a href='login.php' class='btn'>Sign In</a>";
            }
        ?>
        
    </header>