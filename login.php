<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "userinfo";


$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Connection Check
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());

}

//If login
if (isset($_POST['login'])) {
    //Collect from form
    $email = $_POST["email"];
    $passwords = $_POST["passwords"];

    // Retrive from database
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND passwords = ?");
    $stmt->bind_param("ss", $email, $passwords);
    $stmt->execute();

    // Checking
    if ($stmt->fetch()) {
        echo 'Login Succesful!<form action="index.html"><button type="submit">Return to Home Page</button></form>';

    } else {
        echo ' Invalid username or password, login Unsuccesful. Try again or Register now!<form action="index.html"><button type="submit">Return to Home Page</button></form>';
    }

    mysqli_close($conn);

}
?>