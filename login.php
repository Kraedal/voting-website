<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sregistration";

        // Establish database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['idnumber']) && isset($_POST['password'])) {
        $idNumber = $_POST['idnumber'];
        $password = $_POST['password'];

        // Prepare and execute the query
        $stmt = $conn->prepare("SELECT * FROM login WHERE id = ? AND pass = ?");
        $stmt->bind_param("ss", $idNumber, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the credentials exist in the database
        if ($result->num_rows == 1) {
            // Credentials are correct, redirect to home.php
            $stmt->close();
            $conn->close();
            header("Location: home.php");
            exit;
        } else {
            // Credentials are incorrect, redirect back to login.php
            $stmt->close();
            $conn->close();
            echo "<script>alert('ID or Password not stored in the Database, Try again!');</script>";
        }
    } else {
        // ID number or password not provided, handle the error
        // (e.g., display an error message or redirect to the login page)
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USL - Voting</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logousl.ico">
    <script src="index.js" defer></script>
</head>
<body>
    <div class="login">
        <div class="user-login">
            <form method="POST">
            <label for="idnumber">ID Number</label><br>
            <input type="text" name="idnumber" required><br> 
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br>
            <input type="checkbox" id="terms" required> Agree to the <a href="#" id="pop-up"> terms of use.</a><br>
            <button type="submit">Login</button>
            </form>
            </div>
        <div class="logo">
            <img src="images/logooo.png" alt="maybe the usl logo">
        </div>
    </div>
    <div class="popup-overlay" id="popup-overlay">
        <div class="popup-content">
          <span class="close" id="close-popup">&times;</span>
          <h2>TERMS OF USE</h2>
          <p><br>
            Using this facility on the university website indicates that you have read and accept these terms and conditions and agree to be bound by and comply with them. If you do not accept these terms, do not use this facility.
            <br><br>
            University of Saint Louis reserves the right to modify these terms at any time and will publish notice of any such modifications at this site. By continuing to access the portal after notice of such modifications has been published, you signify your agreement to be bound by them.
            <br><br>
            The University of Saint Louis provides electronic access to demographic, grade, and other information related to its students via its Student Portal system. This information is intended for the use of the currently enrolled students, their parents, or their legal guardians.
            <br><br>
            The University reserves the right to grant or deny access to the Student Portal system in accordance with the existing ICT policies of the University.
            <br><br>
            The Student/Parent account information to access the portal determines who has access to the student's records and must be current and accurate to ensure the student's privacy. If the user thinks that the account is no longer safe, a new account should be registered at the Center for Information and communications Technology(CICT). The username and password used to access student information via the Student Portal system should not be shared with unauthorized individuals. USL will not be responsible for unauthorized access to or use of such information.
            <br><br>
            While USL strives to ensure information on its Student Portal is accurate and up-to-date, the system does not contain official information. Official information is maintained in the student's cumulative record and/or the Registrar's Office files. Any student demographic or contact information that is found to be incorrect should be reported to and corrected by the university through concerned offices. A parent, guardian, or student who believes grade information is incorrect should promptly contact the Teacher of Record for the class in question.
            <br><br>
            Any data presented via the Student Portal is subject to change without notice. Although USL strives to provide access to student information via the Student Portal system at all times, technical difficulties, including those beyond our control, may make such access temporarily unavailable. As a result, continuous, uninterrupted access to the Student Portal cannot be guaranteed.
          </p>
        </div>
      </div>
</body>
</html>