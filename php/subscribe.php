<?php
if($_POST && isset($_POST['email'])) {

    $email = $_POST['email'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "honeyhighlights";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbasename);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from user_table where email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {  }  

    $sql = "INSERT INTO subscribe_table (email) VALUE ('$email')";

    if (mysqli_query($conn, $sql)) {
        $data = array(
            "id" => "Successful",
            "content" => "Thank you for subscribing.",
            "email" => $email
        );
    } else {

    }
}
echo json_encode($data);

?>