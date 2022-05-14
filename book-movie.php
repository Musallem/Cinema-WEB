<?php 

require 'inc/dbh-inc.php';
$id = $_GET['movie_id'];
$query = "SELECT * FROM movies WHERE movie_id=" . $id;
//get result 
$result = mysqli_query($conn, $query);
$movie = mysqli_fetch_array($result, MYSQLI_ASSOC);
// free result (free it from memory)
mysqli_free_result($result);
//close connection
mysqli_close($conn);

?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/book-movie.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once 'inc/header.php'; ?>
    <h3><?php echo $movie['movie_name']; ?> </h3>



    <div class="movie-container">
        <div class="movie-image"><img src="<?php echo $movie['movie_image']; ?>"></div>
        <div class="movie-details">
            <h2>
                <h2><?php echo $movie['movie_name']; ?></h2>
                <p><?php echo $movie['movie_desc']; ?></p>
        </div>
        <div class="booking-container">
            <p>The movie you want to book: <span><?php echo $movie['movie_name']; ?></span>:</p>
            <p>The selected movie price is: <?php echo $movie['movie_price']; ?></p>
            <a href="<?php echo ROOT_URL; ?>seats.php?movie_id=<?php echo $movie['movie_id']; ?>" class="btn">Book</a>

        </div>
    </div>
    </div>
</body>