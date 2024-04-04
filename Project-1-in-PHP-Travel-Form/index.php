<?php
$submit = false;
if (isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("Connection to this database failed due to" . mysqli_connect_errno());
    }
    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

    // echo $sql;

    // execute the query
    if ($con->query($sql) == true) {
        // Flag for successful submission
        $submit = true;
        // Redirect to a thank you page
        header("Location: thankyou.php");
        exit();
    } else {
        echo "ERROR: $sql <br> $con -> error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Workbench&display=swap" rel="stylesheet">
</head>

<body>
    <img class="bg" src="https://images.collegedunia.com/public/college_data/images/campusimage/14498300283.jpg" alt="IIT Tangi">
    <div class="container">
        <h1>Welcome to IIT Tangi US Trip form</h1>
        <p>Enter your details and submit this form to confirm participation in the trip.</p>
        <?php
        if ($submit) {
            echo ('<p class="submitmsg">Thanks for submitting the form . We are happy to see you joining us for the US trip.</p>');
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other Information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>

    </div>
    <script src="./index.js"></script>
</body>

</html>