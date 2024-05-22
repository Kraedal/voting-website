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
$party = isset($_POST["party"]) ? $_POST["party"] : "";
$president = isset($_POST["pres"]) ? $_POST["pres"] : "";
$vicePresident = isset($_POST["vice"]) ? $_POST["vice"] : "";
$execSecretary = isset($_POST["exec"]) ? $_POST["exec"] : "";
$assocSecretary = isset($_POST["assoc"]) ? $_POST["assoc"] : "";
$treasurer = isset($_POST["tres"]) ? $_POST["tres"] : "";
$auditor = isset($_POST["aud"]) ? $_POST["aud"] : "";
$pro = isset($_POST["pro"]) ? $_POST["pro"] : "";
$busMan1 = isset($_POST["Busman1"]) ? $_POST["Busman1"] : "";
$busMan2 = isset($_POST["Busman2"]) ? $_POST["Busman2"] : "";
$logisticHead = isset($_POST["logis"]) ? $_POST["logis"] : "";
$socioCulturalCoordinator = isset($_POST["socio"]) ? $_POST["socio"] : "";
$cecaCoordinator = isset($_POST["ceca"]) ? $_POST["ceca"] : "";
$sportsCoordinator = isset($_POST["sports"]) ? $_POST["sports"] : "";
$environmentalCoordinator = isset($_POST["envi"]) ? $_POST["envi"] : "";
$religiousCoordinator = isset($_POST["religious"]) ? $_POST["religious"] : "";


// Check if the primary key value already exists in the table
$checkSql = "SELECT * FROM sscvotes WHERE party = ? AND president = ? AND vice_president = ? AND exec_secretary = ? AND assoc_secretary = ? AND treasurer = ? AND auditor = ? AND press_relation_officer = ? AND business_manager1 = ? AND business_manager2 = ? AND logistic_head = ? AND socio_cultural_coordinator = ? AND ceca_coordinator = ? AND sports_coordinator = ? AND environmental_coordinator = ? AND religious_coordinator = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $checkSql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $party, $president, $vicePresident, $execSecretary, $assocSecretary, $treasurer, $auditor, $pro, $busMan1, $busMan2, $logisticHead, $socioCulturalCoordinator, $cecaCoordinator, $sportsCoordinator, $environmentalCoordinator, $religiousCoordinator);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


if (mysqli_num_rows($result) > 0) {
    // Handle duplicate entry error
    echo "<script>alert('Error: Registration already exists for the party. Register again.');</script>";
    // Redirect to registration.php after a delay
    echo "<script>  
    setTimeout(function() {
        window.location.href = 'registration.php';
    }, 1000); // 1 second delay
</script>";
} else {
    $sql = "INSERT INTO ssc (party, president, vice_president, exec_secretary, assoc_secretary, treasurer, auditor, press_relation_officer, business_manager1, business_manager2, logistic_head, socio_cultural_coordinator, ceca_coordinator, sports_coordinator, environmental_coordinator, religious_coordinator)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $party, $president, $vicePresident, $execSecretary, $assocSecretary, $treasurer, $auditor, $pro, $busMan1, $busMan2, $logisticHead, $socioCulturalCoordinator, $cecaCoordinator, $sportsCoordinator, $environmentalCoordinator, $religiousCoordinator);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    
    echo "<script>
    // Display the message
    alert('Thank you');

    // Redirect to home.php
    window.location.href = 'home.php';
</script>";
    }
?>  
