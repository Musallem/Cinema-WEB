<?php
include_once 'inc/header.php';
?>
        <!-- Navigation Bar (Ends) -->


    <!-- signup (starts) -->
 <script> 

function matchPassword() {
        var pass1 = document.getElementById("p1").value;
        var pass2 = document.getElementById("p2").value;
        if (pass1 != pass2 ) {
            alert("Passwords do not match.");
            return false;
            document.getElementById("message").innerHTML ;
            
        }
        return true;
    }
</script>
 



<section class="signup-form">   
        
            
            
            <form action="inc/signup-inc.php" method="post">
                <div class="container">
                    <h2>Sign Up</h2>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <table align="center">
                        <tr>
                            <td><label for="name"><b>Full name:</b></label></td>
                            <td><input type="text" name="name" id="name"  pattern="^[a-zA-Z]+( [a-zA-Z]+)+$" minlength="8" maxlength="30" placeholder="Enter your full name " title="You have to enter full name ex: Ahmad khalid " required></td>
                    <br></tr>
                    <tr>
                        <td><label for="email"><b>Email:</b></label></td>
                        <td><input type="text" name="email" id="email" minlength="8" maxlength="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="You have to enter valid email example@mail.com"  placeholder="Enter your email" required></td>
                    <br></tr>
                    <tr>
                        <td><label for="uid"><b>Username:</b></label></td>
                        <td><input type="text" name="uid" id="user" pattern="[a-zA-Z]+" title="Username should only contain  letters. ex: Ahmed,mohma" minlength="3" maxlength="15" placeholder="Enter your username" required></td>
                    <br></tr>
                   
                    <tr>
                        <td><label for="pwd1"><b>Password:</b></label></td>
                        <td><input type="password" name="pwd" id="p1" minlength="8" maxlength="20" placeholder="Enter your password" required></td>
                    <br></tr>
                    <tr>
                        <td><label for="pswd2"><b>Confirm password:  </b></label></td>
                        <td><input type="password" name="pwdrepeat" id="p2" minlength="8" maxlength="20" placeholder="Repeat the password" required></td>
                    <br></tr>
                    <tr>
                        <td>
                    <div class="clearfix">
                    <button type="button" name="cancel" style="border-color:blue ">Cancel</button></td>
                    <td>
                    <button type="submit" name="submit" onclick=" return matchPassword()" " style="border-color:blue " >Sign Up</button></td>
                    </div></tr>
                    </table>
                </div>
            </form>
  
  
        <!-- error masseges -->
        <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput") {
                echo "<p> please fill in all fields!</p>";
                }
                else if ($_GET["error"] == "invalidUid") {
                echo "<p> choose a proper username</p>";
                }
                else if ($_GET["error"] == "invalidEmail") {
                echo "<p> choose aproper email</p>";
                }
                else if ($_GET["error"] == "PasswordDonMatch") {
                echo "<p> Password doesn't match</p>";
                }
                else if ($_GET["error"] == "userExists") {
                echo "<p> username already exists!</p>";
                }
                else if ($_GET["error"] == "statmentFailed") {
                echo "<p> something went wrong, try again</p>";
                }
                else if ($_GET["error"] == "none") {
                echo "<p> You have signed up successfully</p>";
                }
            }
        ?>


    </section>   
    
        
        <!-- signup (ends) -->

        <!-- footer (Starts) -->
<?php
include_once 'inc/footer.php';
?>