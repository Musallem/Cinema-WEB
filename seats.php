<?php
include_once 'inc/header.php';
require('inc/dbh-inc.php');
// Seats query
$query = "SELECT * FROM seats";
$result = mysqli_query($conn, $query);
$seats = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  Get clicked movie query
$id = $_GET['movie_id'];
$query2 = "SELECT * FROM movies WHERE movie_id=" . $id;
$result2 = mysqli_query($conn, $query2);
$movie = mysqli_fetch_array($result2, MYSQLI_ASSOC);
//  Get booked seats query
$query3 = "SELECT * FROM bookings WHERE movie_id=" . $id;
$result3 = mysqli_query($conn, $query3);
$bookings = mysqli_fetch_all($result3, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Seats</title>
    <link rel="stylesheet" href="css/seats.css">

</head>

<body>
    <div class="seats-container">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="screen"></div>
            <?php $counter = 0; ?>
            <?php foreach ($seats as $seat) : ?>
            <?php if ($counter % 4 == 0) :
                    echo $counter > 0 ? "</div>" : "";
                    echo "<div class='col'>";
                endif; ?>

            <input type="checkbox" id="ss" data-seat="<?php echo  $seat['seat_name']; ?> " class="<?php
                $sflag = 'chk';
                foreach ($bookings as $booking) :
                    $split_seat_name = explode(",", $booking["seat_name"]);
                    foreach ($split_seat_name as $s_booking) :
                        if ($seat['seat_name'] == $s_booking) :
                            $sflag = "unavailable";
                            break 2;
                        endif;
                    endforeach;
                endforeach;
                echo $sflag; ?>" name="seat_name" value="<?php echo  $seat['seat_name']; ?>">
            <?php $counter++;
            endforeach; ?>
    </div>
    <div class=" selected-container">
        <p>The movie you want to book: <?php echo $movie['movie_name']; ?> and the price of the ticket is: <span
                class="movie-price"><?php echo $movie['movie_price']; ?></span></p>

        <p>Number of seats selected: <input readonly type="text" name="number_of_seats" value="" class=" num"></input>
        </p>

        <p>The seats you selected are: <input readonly type="text" name="seat_name" value=""
                class="ShowSelectedSeats"></input>
        </p>

        <p>Your total is: <input readonly type="text" name="total_price" value="" class="total"></input>
        </p>

    </div>
    <input type="submit" name="submit" value="submit" class="btn">
    </form>

    <?php

    // Check for submit
    if (isset($_POST['submit'])) {
        // Get form data
        $movie_id = $movie['movie_id'];
        $movie_name = $movie['movie_name'];
        $number_of_seats = mysqli_real_escape_string($conn, $_POST['number_of_seats']);
        $seat_name = mysqli_real_escape_string($conn, $_POST['seat_name']);
        $total_price = mysqli_real_escape_string($conn, $_POST['total_price']);
        // creat post query
        $post_query = "INSERT INTO bookings(movie_id, movie_name, number_of_seats, seat_name, total_price)
    VALUES('$movie_id', '$movie_name', '$number_of_seats',
    '$seat_name', '$total_price')";
        if (mysqli_query($conn, $post_query)) {
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
    ?>

    <script src="js/seats.js"></script>
</body>

</html>