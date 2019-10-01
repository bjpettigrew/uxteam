<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php include('includes/header.php'); ?>


<style>

    ul {
        margin-left: 5px;
        }
    li {
        float: left;
        list-style-type: none;
        background-color: #fd6a02;
        border: 2px solid black;
        padding: 10px 5%;
        margin-top: 1%;
        margin-left: 2%;
        }

    li a {
        display: block;
        color: black;
        text-align: center;
        text-decoration: none;
        }
    li a:hover {
        background-color: #F79682;
        }

    h1 {
        text-align: center;
        padding: 2%;
        }
    body {
        background-color: #fd6a02;
        }
    .container {
        border: ridge 10px grey;
        padding: 3%;
        margin-top: 2%;
        font-weight: bold;
        }
    button {
        background-color: #fd6a02;
        }

</style>
</head>
<!-- html login page !-->

<br>
<?php
echo $error;
 ?>
 <main>
 <h1>Log In To See The Newest Content From Team UX!</h1>
    <div class="container">
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $email;?>"><br><br>


            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br><br>
            <button>Submit</button>
        </form>
    </div>
</main>
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
    if(empty($password)) {
    // output error message
    $error = "Enter your Password";
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
</html>