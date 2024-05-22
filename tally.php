<style>
.container {
    display: flex;
    justify-content: center;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
}

.grid-item {
    background-color: #f5f5f5;
    padding: 20px;
    border: 1px solid #ccc;
}
</style>


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

// Array to store the total votes per person per position
$votesPerPerson = array();

// Positions array
$positions = array(
    'president',
    'vice_president',
    'exec_secretary',
    'assoc_secretary',
    'treasurer',
    'auditor',
    'press_relation_officer',
    'business_manager1',
    'business_manager2',
    'logistic_head',
    'socio_cultural_coordinator',
    'ceca_coordinator',
    'sports_coordinator',
    'environmental_coordinator',
    'religious_coordinator'
);

echo '<div class="container">';
echo '<div class="grid-container">';

// Fetch the total votes per person per position
foreach ($positions as $position) {
    $column = "`$position`"; // Enclose column name in backticks
    $query = $conn->query("SELECT $column, COUNT(*) AS votes FROM sscvotes GROUP BY $column");
    while ($row = $query->fetch_assoc()) {
        $person = $row[$position];
        $votes = $row['votes'];
        if (!isset($votesPerPerson[$position])) {
            $votesPerPerson[$position] = array();
        }
        $votesPerPerson[$position][$person] = $votes;
    }
}

// Display the total votes per person per position
foreach ($votesPerPerson as $position => $votesByPerson) {
    echo '<div class="grid-item">';
    echo "<h2>$position</h2>";
    foreach ($votesByPerson as $person => $votes) {
        echo "<p>Name: $person</p>";
        echo "<p>Total Votes: $votes</p>";
    }
    echo '</div>';
}

echo '</div>';
echo '</div>';

?>