<?php include('includes/header.php'); ?>
<?php include('style.css')?>
<h1>Log In To Team UX Here!</h1>
<?php
echo $error;
 ?>
<main>
    <div class="container">

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $email;?>">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <button>Submit</button>
        </form>
    </div>
</main>



<?php include('includes/footer.php'); ?>