<?php
include_once 'inc/header.php';
?>
        <!-- Navigation Bar (Ends) -->
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "Hello, ".$_SESSION["useruid"]."";
            }

            require 'inc/dbh-inc.php';
            $query = 'SELECT * FROM movies';
            //get result 
            $result = mysqli_query($conn, $query);
            $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
            // var_dump($posts);
            // free result (free it from memory)
            mysqli_free_result($result);
            //close connection
            mysqli_close($conn); ?>
        ?>

   <!-- Home (starts) -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- Box 1 -->
            <div class="swiper-slide conatiner">
                <img src="images/header.png" alt="">
                <div class="home-text">
                    <span>Live the Journey</span>
                    <h1 class="white-text">The Lord of The Rings: The Fellowship of the Ring</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>

                    </a>
                </div>
            </div>
            <!-- Home (ends) -->


    </section>
    <a href="about-movie" class="movie-url"></a>
    <!-- Movies -->

    <section class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies Conatiner -->
        <div class="movies-container">
            <?php foreach ($movies as $movie) : ?>
            <!-- Box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo $movie['movie_image'] ?>" alt="">
                </div>
                <h3><?php echo $movie['movie_name']; ?></h3>
                <a href="<?php echo ROOT_URL; ?>book-movie.php?movie_id=<?php echo $movie['movie_id']; ?>"
                    class="btn">Book</a>
            </div>
            <?php endforeach ?>
        </div>
    </section>





    <!-- Coming soon -->
    <section class=" coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- Coming Container -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- Box 1 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/harakiri.png" alt="">
                    </div>
                    <h3>Harakiri</h3>
                    <span>133 min | Samurai </span>
                </div>
                <!-- Box 2 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/7samurai.png" alt="">
                    </div>
                    <h3>Seven Samurai</h3>
                    <span>207 min | Samurai</span>
                </div>
                <!-- Box 3 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/rashomon.png" alt="">
                    </div>
                    <h3>Rashomon</h3>
                    <span>93 min | Drama/Crime</span>
                </div>
                <!-- Box 4 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/godfather2.png" alt="">
                    </div>
                    <h3>The Godfather: Part II</h3>
                    <span>202 min | Crime/Drama</span>
                </div>
                <!-- Box 5 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/funnygames.png" alt="">
                    </div>
                    <h3>Funny Games</h3>
                    <span>108 min | Crime/Drama/Thriller</span>
                </div>
                <!-- Box 6 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/barrylyndon.png" alt="">
                    </div>
                    <h3>Barry Lyndon</h3>
                    <span>184 min | Drama/War</span>
                </div>
                <!-- Box 7 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/spiritedaway.png" alt="">
                    </div>
                    <h3>Spirited Away</h3>
                    <span>125 min | Fantasy/Adventure</span>
                </div>
                <!-- Box 8 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/werckmeisterharmonies.png" alt="">
                    </div>
                    <h3>Werckmeister Harmonies</h3>
                    <span>145 min | Drama/Mystery</span>
                </div>
                <!-- Box 9 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/satantango.png" alt="">
                    </div>
                    <h3>Satantango</h3>
                    <span>450min | Drama</span>
                </div>
                <!-- Box 10 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="images/onthesilverglobe.png" alt="">
                    </div>
                    <h3>On the Silver Globe</h3>
                    <span>157 min | Sci-fi/Drama</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Film Search -->
    <section class="newsletter" id="film-search">
        <h2>Search for a film</h2>
        <div class="container">
            <form action="">
                <input type="search" name="search" placeholder="Search for a film..." required>
                <input type="submit" name="submit" value="Search" class="btn">
            </form>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter" id="newsletter">
        <h2>Subscribe To Get Newsletter</h2>
        <form action="">
            <input type="email" class="email" placeholder=" Enter Email..." required>
            <input type="submit" value="Subscribe" class="btn">
        </form>
    </section>

    

        <!-- footer (Starts) -->
<?php
include_once 'inc/footer.php';
?>