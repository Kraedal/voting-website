<?php
    session_start();

    // Assuming you have a database connection established
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logousl.ico">
    <script src="index.js" defer></script>
</head>
<body>
    <header class="main-header flex">
        <img class="logo" src="images/logousl.png" alt="">
        <nav>
            <ul class="navigation flex">
                <li>
                    <a href="home.php">HOME</a>
                </li>
                <li>
                    <a href="#experience">ABOUT</a>
                </li>
                <li>
                    <a href="#rules">RULES</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="registration-boxes">
        <a href="#SSC">
        <h1 class="banner-ssc">Supreme Student Council</h1>
        </a>
        <a href="#department">
        <h1 class="banner-dep">Departmental</h1>
        </a>
    </div>     
    <div class="registration-form">
        <div class="ssc">
            <form action="proc-ssc.php" method = "POST">
            <h1 class="reg-title-h1" id="SSC">Supreme Student Council</h1>
            
            <label for="party">Partylist Name</label>
            <input type="text" name="party"required>

            <h2>POSITIONS</h2>

            <label for="pres">President</label>
            <input type="text" name="pres"required/>

            <label for="vice">Vice President</label>
            <input type="text" name="vice"required/>

            <label for="exec">Exec. Secretary</label>
            <input type="text" name="exec"required/>

            <label for="assoc">Assoc. Secretary</label>
            <input type="text" name="assoc"required>

            <label for="tres">Treasurer</label>
            <input type="text" name="tres"required>

            <label for="aud">Auditor</label>
            <input type="text" name="aud"required>

            <label for="pro">Press Relation Officer</label>
            <input type="text" name="pro"required>

            <label for="Busman1">Business Manager</label>
            <input type="text" name="Busman1"required>
    
            <label for="Busman2">Business Manager</label>
            <input type="text" name="Busman2"required>

            <label for="logis">Logistic Head</label>
            <input type="text" name="logis"required>

            <label for="socio">Socio-Cultural Coordinator</label>
            <input type="text" name="socio"required>

            <label for="ceca">CECA Coordinator</label>
            <input type="text" name="ceca"required>

            <label for="sports">Sports Coordinator</label>
            <input type="text" name="sports"required>

            <label for="envi">Environmental Coordinator</label>
            <input type="text" name="envi"required>

            <label for="relcoor">Religious Coordinator</label>
            <input type="text" name="religious"required>
            <button type="submit">Register</button>
        </form>
        </div>
        <div class="departmental">
            <form action="proc-dep.php" method = "POST">
            <h1 id="department">Departmental</h1>
            
            <label for="dep" id="dep1">Department</label>
            <select name="department">
        <option value="SEAITE">SEAITE</option>
        <option value="SABH">SABH</option>
        <option value="SHAS">SHAS</option>
        <option value="SEAS">SEAS</option>
            </select>

        <label for="party">Partylist Name</label>
        <input type="text" name="party"required>
        
        <h2>POSITIONS</h2>
            <label for="pres">Governor</label>
            <input type="text" name="gov"required/>

            <label for="vice">Vice Governor</label>
            <input type="text" name="vice"required/>

            <label for="exec">Exec. Secretary</label>
            <input type="text" name="exec"required/>

            <label for="assoc">Assoc. Secretary</label>
            <input type="text" name="assoc"required>

            <label for="tres">Treasurer</label>
            <input type="text" name="tres"required>

            <label for="aud">Auditor</label>
            <input type="text" name="aud"required>

            <label for="pro">Press Relation Officer</label>
            <input type="text" name="pro"required>

            <label for="Busman1">Business Manager</label>
            <input type="text" name="Busman1"required>
    
            <label for="Busman2">Business Manager</label>
            <input type="text" name="Busman2"required>

            <label for="logis">Logistic Head</label>
            <input type="text" name="logis"required>

            <label for="socio">Socio-Cultural Coordinator</label>
            <input type="text" name="socio"required>

            <label for="ceca">CECA Coordinator</label>
            <input type="text" name="ceca"required>

            <label for="sports">Sports Coordinator</label>
            <input type="text" name="sports"required>

            <label for="envi">Environmental Coordinator</label>
            <input type="text" name="envi"required>

            <label for="relcoor">Religious Coordinator</label>
            <input type="text" name="religious"required>
            <button type="submit">Register</button>
            </form>
        </div>

    </div>
</body>
</html>