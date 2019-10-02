<!doctype html>

<?php
        $first = "";
        $last = "";
        $email = "";
        $password = "";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];
}

if(isset($first) && isset($last) && ($email) && isset($password)) {
    echo 'Thank you for Registering';
}
else {
    echo 'Please fill out empty fields';
}




?>
    <br><br>
</main>
   <div class="container">
    <form action ="register.php" method="POST">
        <input type="text" id="first" name="first" placeholder="Enter First Name Here" value="<?php echo $first;?>"><br><br>

        <input type="text" id="last" name="last" placeholder="Enter Last Name Here" value="<?php echo $last;?>"><br><br>

        <input type="email" id="email" name="email" placeholder="Enter Email Address Here" value="<?php echo $email;?>"><br><br>

        <input type="password" id="password" name="password" placeholder="Enter Password Here" value="<?php echo $password;?>"><br><br>
            <button>SUBMIT</button>
    </form>
    </div>
</main>


</html>