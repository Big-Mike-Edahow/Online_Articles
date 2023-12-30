<?php
/* register.php */

include "config.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) 
           VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "New record created successfully.";

    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>Student Registration Form</title>
</head>

<body>
    <main>
        <h1>Registration Form</h1>
        <form action="" method="POST">
            <fieldset>
                <legend>Information:</legend>
                <label for="firstname">First name: </label>
                <input type="text" name="firstname">
                <br>
                <label for="lastname">Last name: </label>
                <input type="text" name="lastname">
                <br>
                <label for="email">Email: </label>
                <input type="email" name="email">
                <br>
                <label for="password">Password: </label>
                <input type="password" name="password">
                <br>
                <label for="gender">Gender: </label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <br><br>
                <input type="submit" name="submit" value="submit">
            </fieldset>
        </form>
    </main>
</body>

</html>

