<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sregistration";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "<script>console.log(\"Connected successfully\");</script>";
}

$department = isset($_POST["department"]) ? $_POST["department"] : "";
$party = isset($_POST["party"]) ? $_POST["party"] : "";
$governor = isset($_POST["gov"]) ? $_POST["gov"] : "";
$viceGovernor = isset($_POST["vice"]) ? $_POST["vice"] : "";
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
$checkSql = "SELECT * FROM seas WHERE party = ? AND governor = ? AND vice_governor = ? AND exec_secretary = ? AND assoc_secretary = ? AND treasurer = ? AND auditor = ? AND press_relation_officer = ? AND business_manager1 = ? AND business_manager2 = ? AND logistic_head = ? AND socio_cultural_coordinator = ? AND ceca_coordinator = ? AND sports_coordinator = ? AND environmental_coordinator = ? AND religious_coordinator = ?";

$stmt = $conn->prepare($checkSql);
if (!$stmt) {
    die($conn->error);
}

$stmt->bind_param("ssssssssssssssss", $party, $governor, $viceGovernor, $execSecretary, $assocSecretary, $treasurer, $auditor, $pressRelationOfficer, $businessManager1, $businessManager2, $logisticHead, $socioCulturalCoordinator, $cecaCoordinator, $sportsCoordinator, $environmentalCoordinator, $religiousCoordinator);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Handle duplicate entry error
    echo "<script>alert('Error: Registration already exists for the party. Register again.');</script>";
    // Redirect to registration.php after a delay
    echo "<script>
    setTimeout(function() {
        window.location.href = 'registration.php';
    }, 1000); // 1 second delay
    </script>";
    exit;
} else {
    $pressRelationOfficer = isset($_POST["pro"]) ? $_POST["pro"] : '';
    $businessManager1 = isset($_POST["Busman1"]) ? implode(", ", $_POST["Busman1"]) : '';
    $businessManager2 = isset($_POST["Busman2"]) ? implode(", ", $_POST["Busman2"]) : '';  
    $sql = "INSERT INTO seasvotes (department, party, governor, vice_governor, exec_secretary, assoc_secretary, treasurer, auditor, press_relation_officer, business_manager1, business_manager2, logistic_head, socio_cultural_coordinator, ceca_coordinator, sports_coordinator, environmental_coordinator, religious_coordinator) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die($conn->error);
    }

    $stmt->bind_param("sssssssssssssssss", $department, $party, $governor, $viceGovernor, $execSecretary, $assocSecretary, $treasurer, $auditor, $pressRelationOfficer, $businessManager1, $businessManager2, $logisticHead, $socioCulturalCoordinator, $cecaCoordinator, $sportsCoordinator, $environmentalCoordinator, $religiousCoordinator);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    echo "<script>
    // Display the message
    alert('Vote registered! Thank you');

    // Redirect to home.php
    window.location.href = 'home.php';
</script>";


}


?>
