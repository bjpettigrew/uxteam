<!DOCTYPE html>
<html>
<header>
<meta charset="utf-8">

<?php include('includes/header.php');?>


    <?php
        $first = "";
        $last = "";
        $email = "";
        $password = "";
?>
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


</header>
<main>
     <h1>MAIN CONTENT REGISTRATION PAGE</h1>

    <?php include('includes/inc_registration.php');?>

</main>




<?php include('includes/footer.php');?>
</html>
