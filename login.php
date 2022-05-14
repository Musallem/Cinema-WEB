<?php
include_once 'inc/header.php';
?>
        <!-- Navigation Bar (Ends) -->


    <!-- Login (starts) -->
   <section class="login-form" id="login">
       <h2>Login</h2>
       <div class="signup-form-form"> 
            <form action="inc/login-inc.php" method="post">
                <input type="text" name="uid" pattern="[a-zA-Z0-9 "@" "." "_"]+" minlength="4" maxlength="30" placeholder="Enter your Username/Email" required ><br>
                <input type="password" name="pwd" minlength="8" maxlength="20"placeholder="Enter your password" required ><br>
                <button type="submit" name="submit" required >Login</button>
                
            </form>
            <p>if you don`t have an account click sign up.</p>
            <a href="signup.php">
                <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button></a>
       </div>
       <!-- error masseges -->
       <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput") {
                echo "<p> please fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                echo "<p> Incorrect login information</p>";
                }
            }
        ?>
    </section>   
        
        <!-- Login (ends) -->

        <!-- footer (Starts) -->
<?php
include_once 'inc/footer.php';
?>