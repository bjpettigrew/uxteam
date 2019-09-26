
<?php include('includes/header.php'); ?>
<!-- html login page !-->
<h1>Login Page</h1>
<br>
<?php
echo $error;
 ?>
  <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $email;?>"><br><br>


            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br><br>
            <button>Submit</button>
        </form>
<br>

<?php
// sticky
$email ="";
$password ="";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // store post data into our var
     $email = $_POST['email'];
     $password = $_POST['password'];


if(empty($email)) {
    // output error message
    $error = "Enter your Email";
    }

    if(!isset($error)) {
        // Output a success message
        echo "<h3>You Logged In!</h3>";
        // reset variables to blank
    }
}


?>
<br>


<?php include('includes/footer.php'); ?>