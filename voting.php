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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logousl.ico" type="image/x-icon">

</head>
<body>
<h2 class="vote-text" style="text-align: center; font-size: 50px; background-color: blue; color: white;" >VOTE WISELY!</h2>
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
    <div class="voting-form">
        <div class="ssc">
            <form action="ssc-tally.php" method="POST">
    <h1 id="SSC">Supreme Student Council</h1>
    <br>
    <h2>POSITIONS</h2>

    <label for="pres" class="spacer">President</label>
    <?php
        $query = "SELECT president FROM ssc";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $ssc = $row['president'];
                echo '<div class="positions">';
                echo '<input type="radio" name="pres" value="' . $ssc . '"> ' . $ssc;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
    ?>
<br>

<label for="vice"class="spacer">Vice President</label>
        <?php
            $query = "SELECT vice_president FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['vice_president'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="vice" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="exec"class="spacer">Exec. Secretary</label>
        <?php
            $query = "SELECT exec_secretary FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['exec_secretary'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="exec" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="assoc"class="spacer">Assoc. Secretary</label>
        <?php
            $query = "SELECT assoc_secretary FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['assoc_secretary'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="assoc" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="tres"class="spacer">Treasurer</label>
        <?php
            $query = "SELECT treasurer FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['treasurer'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="tres" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="aud"class="spacer">Auditor</label>
        <?php
            $query = "SELECT auditor FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['auditor'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="aud" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="pro"class="spacer">Press Relation Officer</label>
        <?php
            $query = "SELECT press_relation_officer FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['press_relation_officer'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="pro" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="Busman1" class="spacer">Business Manager</label>
<?php
    $query = "SELECT business_manager1, business_manager2 FROM ssc";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $count = 0; // Counter for tracking the selected checkboxes
        while ($row = mysqli_fetch_assoc($result)) {
            $ssc1 = $row['business_manager1'];
            $ssc2 = $row['business_manager2'];

            echo '<div class="positions">';
            echo '<input type="checkbox" name="Busman1[]" value="' . $ssc1 . '"';
            
            // Check if the value is selected by the user
            if (isset($_POST['Busman1']) && in_array($dep1, $_POST['Busman1'])) {
                echo ' checked';
            }
            
            echo '> ' . $ssc1;
            echo '</div>';

            echo '<div class="positions">';
            echo '<input type="checkbox" name="Busman2[]" value="' . $ssc2 . '"';
            
            // Check if the value is selected by the user
            if (isset($_POST['Busman2']) && in_array($ssc2, $_POST['Busman2'])) {
                echo ' checked';
            }
            
            echo '> ' . $ssc2;
            echo '</div>';
        }
        mysqli_free_result($result);
    } else {
        echo "No data available.";
    }
?>



<label for="logis"class="spacer">Logistics Head</label>
        <?php
            $query = "SELECT logistic_head FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['logistic_head'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="logis" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="socio"class="spacer">Socio-Cultural Coordinator</label>
        <?php
            $query = "SELECT socio_cultural_coordinator FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['socio_cultural_coordinator'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="socio" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="ceca"class="spacer">CECA Coordinator</label>
        <?php
            $query = "SELECT ceca_coordinator FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['ceca_coordinator'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="ceca" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="sports"class="spacer">Sports Coordinator</label>
        <?php
            $query = "SELECT sports_coordinator FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['sports_coordinator'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="sports" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="envi"class="spacer">Environmental Coordinator</label>
        <?php
            $query = "SELECT environmental_coordinator FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['environmental_coordinator'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="envi" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

<label for="relcoor"class="spacer">Religious Coordinator</label>
        <?php
            $query = "SELECT religious_coordinator FROM ssc";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $ssc = $row['religious_coordinator'];
                    echo '<div class="positions">';
                    echo '<input type="radio" name="religious" value="' . $ssc . '"> ' . $ssc;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>
<button type="submit" id="submitButton1">Submit</button>

<script>
            // JavaScript function to limit checkbox selections
            function limitCheckboxSelections(checkbox, limit) {
                var checkboxes = document.getElementsByName(checkbox.name);
                var selectedCount = 0;
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        selectedCount++;
                    }
                }
                if (selectedCount > limit) {
                    checkbox.checked = false;
                }
            }
</script>
        </form>

</div>
    <div>

    <div class="departmental">
        <div class = "depoption">
    <label for="department">Department</label>
        <select name="department" id="departmentSelect" onchange="showForm()">
        <option value="">SELECT DEPARTMENT</option>
        <option value="SEAITE">SEAITE</option>
        <option value="SABH">SABH</option>
        <option value="SHAS">SHAS</option>
        <option value="SEAS">SEAS</option>
    </select>
    </div class="departmental">
    <form action="seaite-tally.php" id="seaiteForm" style="display: none;" method="POST">
        <h1 id="department">Departmental</h1>
        <br>
        <h2>POSITIONS</h2>
        <label for="gov" class="spacer">Governor</label>
        <?php
        $department = "seaite"; // Update with the respective department table name
        $query = "SELECT governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="gov" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="vice" class="spacer">Vice Governor</label>
        <?php
        $query = "SELECT vice_governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['vice_governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="vice" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="exec" class="spacer">Exec. Secretary</label>
        <?php
        $query = "SELECT exec_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['exec_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="exec" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="assoc" class="spacer">Assoc. Secretary</label>
        <?php
        $query = "SELECT assoc_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['assoc_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="assoc" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="tres" class="spacer">Treasurer</label>
        <?php
        $query = "SELECT treasurer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['treasurer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="tres" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="aud" class="spacer">Auditor</label>
        <?php
        $query = "SELECT auditor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['auditor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="aud" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="pro" class="spacer">Press Relation Officer</label>
        <?php
        $query = "SELECT press_relation_officer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['press_relation_officer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="pro" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

<label for="Busman1" class="spacer">Business Manager</label>
<?php
    $query = "SELECT business_manager1, business_manager2 FROM $department";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $count = 0; // Counter for tracking the selected checkboxes
        while ($row = mysqli_fetch_assoc($result)) {
            $dep1 = $row['business_manager1'];
            $dep2 = $row['business_manager2'];

            echo '<div class="positions">';
            echo '<input type="checkbox" name="Busman1[]" value="' . $dep1 . '"';
            
            // Check if the value is selected by the user
            if (isset($_POST['Busman1']) && in_array($dep1, $_POST['Busman1'])) {
                echo ' checked';
            }
            
            echo '> ' . $dep1;
            echo '</div>';

            echo '<div class="positions">';
            echo '<input type="checkbox" name="Busman2[]" value="' . $dep2 . '"';
            
            // Check if the value is selected by the user
            if (isset($_POST['Busman2']) && in_array($dep2, $_POST['Busman2'])) {
                echo ' checked';
            }
            
            echo '> ' . $dep2;
            echo '</div>';
        }
        mysqli_free_result($result);
    } else {
        echo "No data available.";
    }
?>



        <label for="logis" class="spacer">Logistics Head</label>
        <?php
        $query = "SELECT logistic_head FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['logistic_head'];
                echo '<div class="positions">';
                echo '<input type="radio" name="logis" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="socio" class="spacer">Socio-Cultural Coordinator</label>
        <?php
        $query = "SELECT socio_cultural_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['socio_cultural_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="socio" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="ceca" class="spacer">CECA Coordinator</label>
        <?php
        $query = "SELECT ceca_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['ceca_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="ceca" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="sports" class="spacer">Sports Coordinator</label>
        <?php
        $query = "SELECT sports_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['sports_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="sports" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="envi" class="spacer">Environmental Coordinator</label>
        <?php
        $query = "SELECT environmental_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['environmental_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="envi" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="relcoor" class="spacer">Religious Coordinator</label>
        <?php
        $query = "SELECT religious_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['religious_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="relcoor" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>
<button type="submit" id="submitButton">Submit</button>
    </form>
</div>


<div class="departmental">
    <form action="sabh-tally.php" id="sabhForm" style="display: none;" method="POST">
    <h1 id="department">Departmental</h1>
    <br>
        <h2>POSITIONS</h2>
        
        <label for="gov" class="spacer">Governor</label>
        <?php
        $department = "sabh"; // Update with the respective department table name
        $query = "SELECT governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="gov" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="vgov" class="spacer">Vice Governor</label>
        <?php
        $query = "SELECT vice_governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['vice_governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="vice" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="exec" class="spacer">Exec. Secretary</label>
        <?php
        $query = "SELECT exec_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['exec_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="exec" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="assoc" class="spacer">Assoc. Secretary</label>
        <?php
        $query = "SELECT assoc_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['assoc_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="assoc" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="tres" class="spacer">Treasurer</label>
        <?php
        $query = "SELECT treasurer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['treasurer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="tres" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="aud" class="spacer">Auditor</label>
        <?php
        $query = "SELECT auditor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['auditor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="aud" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="pro" class="spacer">Press Relation Officer</label>
        <?php
        $query = "SELECT press_relation_officer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['press_relation_officer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="pro" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

<label for="Busman1"class="spacer">Business Manager</label>
        <?php
            $query = "SELECT business_manager1, business_manager2 FROM $department";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $count = 0; // Counter for tracking the selected checkboxes
                while ($row = mysqli_fetch_assoc($result)) {
                    $dep1 = $row['business_manager1'];
                    $dep2 = $row['business_manager2'];
            
                    echo '<div class="positions">';
                    echo '<input type="checkbox" name="Busman1[]" value="' . $dep1 . '" onclick="limitCheckboxSelections(this, 2)"> ' . $dep1;
                    echo '</div>';
            
                    echo '<div class="positions">';
                    echo '<input type="checkbox" name="Busman2[]" value="' . $dep2 . '" onclick="limitCheckboxSelections(this, 2)"> ' . $dep2;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

        <label for="logis" class="spacer">Logistics Head</label>
        <?php
        $query = "SELECT logistic_head FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['logistic_head'];
                echo '<div class="positions">';
                echo '<input type="radio" name="logis" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="socio" class="spacer">Socio-Cultural Coordinator</label>
        <?php
        $query = "SELECT socio_cultural_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['socio_cultural_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="socio" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="ceca" class="spacer">CECA Coordinator</label>
        <?php
        $query = "SELECT ceca_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['ceca_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="ceca" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="sports" class="spacer">Sports Coordinator</label>
        <?php
        $query = "SELECT sports_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['sports_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="sports" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="envi" class="spacer">Environmental Coordinator</label>
        <?php
        $query = "SELECT environmental_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['environmental_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="envi" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="relcoor" class="spacer">Religious Coordinator</label>
        <?php
        $query = "SELECT religious_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['religious_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="relcoor" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>
<button type="submit" id="submitButton">Submit</button>
    </form>
</div>


<div class="departmental">
    <form action = "shas-tally.php" id="shasForm" style="display: none;" method="POST">
    <h1 id="department">Departmental</h1>
    <br>
        <h2>POSITIONS</h2>

        <label for="gov" class="spacer">Governor</label>
        <?php
        $department = "shas"; // Update with the respective department table name
        $query = "SELECT governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="gov" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="vgov" class="spacer">Vice Governor</label>
        <?php
        $query = "SELECT vice_governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['vice_governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="vice" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="exec" class="spacer">Exec. Secretary</label>
        <?php
        $query = "SELECT exec_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['exec_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="exec" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="assoc" class="spacer">Assoc. Secretary</label>
        <?php
        $query = "SELECT assoc_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['assoc_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="assoc" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="tres" class="spacer">Treasurer</label>
        <?php
        $query = "SELECT treasurer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['treasurer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="tres" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="aud" class="spacer">Auditor</label>
        <?php
        $query = "SELECT auditor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['auditor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="aud" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="pro" class="spacer">Press Relation Officer</label>
        <?php
        $query = "SELECT press_relation_officer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['press_relation_officer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="pro" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

<label for="Busman1"class="spacer">Business Manager</label>
        <?php
            $query = "SELECT business_manager1, business_manager2 FROM $department";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $count = 0; // Counter for tracking the selected checkboxes
                while ($row = mysqli_fetch_assoc($result)) {
                    $dep1 = $row['business_manager1'];
                    $dep2 = $row['business_manager2'];
            
                    echo '<div class="positions">';
                    echo '<input type="checkbox" name="Busman1[]" value="' . $dep1 . '" onclick="limitCheckboxSelections(this, 2)"> ' . $dep1;
                    echo '</div>';
            
                    echo '<div class="positions">';
                    echo '<input type="checkbox" name="Busman2[]" value="' . $dep2 . '" onclick="limitCheckboxSelections(this, 2)"> ' . $dep2;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

        <label for="logis" class="spacer">Logistics Head</label>
        <?php
        $query = "SELECT logistic_head FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['logistic_head'];
                echo '<div class="positions">';
                echo '<input type="radio" name="logis" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="socio" class="spacer">Socio-Cultural Coordinator</label>
        <?php
        $query = "SELECT socio_cultural_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['socio_cultural_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="socio" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="ceca" class="spacer">CECA Coordinator</label>
        <?php
        $query = "SELECT ceca_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['ceca_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="ceca" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="sports" class="spacer">Sports Coordinator</label>
        <?php
        $query = "SELECT sports_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['sports_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="sports" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="envi" class="spacer">Environmental Coordinator</label>
        <?php
        $query = "SELECT environmental_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['environmental_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="envi" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="relcoor" class="spacer">Religious Coordinator</label>
        <?php
        $query = "SELECT religious_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['religious_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="relcoor" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>
<button type="submit" id="submitButton">Submit</button>
    </form>
</div>


<div class="departmental">
    <form action = "seas-tally.php" id="seasForm" style="display: none;" method="POST">
    <h1 id="department">Departmental</h1>
    <br>
        <h2>POSITIONS</h2>

        <label for="gov" class="spacer">Governor</label>
        <?php
        $department = "seas"; // Update with the respective department table name
        $query = "SELECT governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="gov" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="vgov" class="spacer">Vice Governor</label>
        <?php
        $query = "SELECT vice_governor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['vice_governor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="vice" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="exec" class="spacer">Exec. Secretary</label>
        <?php
        $query = "SELECT exec_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['exec_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="exec" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="assoc" class="spacer">Assoc. Secretary</label>
        <?php
        $query = "SELECT assoc_secretary FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['assoc_secretary'];
                echo '<div class="positions">';
                echo '<input type="radio" name="assoc" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="tres" class="spacer">Treasurer</label>
        <?php
        $query = "SELECT treasurer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['treasurer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="tres" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="aud" class="spacer">Auditor</label>
        <?php
        $query = "SELECT auditor FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['auditor'];
                echo '<div class="positions">';
                echo '<input type="radio" name="aud" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="pro" class="spacer">Press Relation Officer</label>
        <?php
        $query = "SELECT press_relation_officer FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['press_relation_officer'];
                echo '<div class="positions">';
                echo '<input type="radio" name="pro" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

<label for="Busman1"class="spacer">Business Manager</label>
        <?php
            $query = "SELECT business_manager1, business_manager2 FROM $department";
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $count = 0; // Counter for tracking the selected checkboxes
                while ($row = mysqli_fetch_assoc($result)) {
                    $dep1 = $row['business_manager1'];
                    $dep2 = $row['business_manager2'];
            
                    echo '<div class="positions">';
                    echo '<input type="checkbox" name="Busman1[]" value="' . $dep1 . '" onclick="limitCheckboxSelections(this, 2)"> ' . $dep1;
                    echo '</div>';
            
                    echo '<div class="positions">';
                    echo '<input type="checkbox" name="Busman2[]" value="' . $dep2 . '" onclick="limitCheckboxSelections(this, 2)"> ' . $dep2;
                    echo '</div>';
                }
                mysqli_free_result($result);
            } else {
                echo " " . mysqli_error($conn);
            }
        ?>

        <label for="logis" class="spacer">Logistics Head</label>
        <?php
        $query = "SELECT logistic_head FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['logistic_head'];
                echo '<div class="positions">';
                echo '<input type="radio" name="logis" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="socio" class="spacer">Socio-Cultural Coordinator</label>
        <?php
        $query = "SELECT socio_cultural_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['socio_cultural_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="socio" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="ceca" class="spacer">CECA Coordinator</label>
        <?php
        $query = "SELECT ceca_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['ceca_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="ceca" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="sports" class="spacer">Sports Coordinator</label>
        <?php
        $query = "SELECT sports_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['sports_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="sports" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="envi" class="spacer">Environmental Coordinator</label>
        <?php
        $query = "SELECT environmental_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['environmental_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="envi" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>

        <label for="relcoor" class="spacer">Religious Coordinator</label>
        <?php
        $query = "SELECT religious_coordinator FROM $department";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dep = $row['religious_coordinator'];
                echo '<div class="positions">';
                echo '<input type="radio" name="relcoor" value="' . $dep . '"> ' . $dep;
                echo '</div>';
            }
            mysqli_free_result($result);
        } else {
            echo " " . mysqli_error($conn);
        }
        ?>
<button type="submit" id="submitButton">Submit</button>
    </form>
</div>


<script>
            // JavaScript function to limit checkbox selections
            function limitCheckboxSelections(checkbox, limit) {
                var checkboxes = document.getElementsByName(checkbox.name);
                var selectedCount = 0;
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        selectedCount++;
                    }
                }
                if (selectedCount > limit) {
                    checkbox.checked = false;
                }
            }
            document.addEventListener("DOMContentLoaded", function() {
var departmentSelect = document.getElementById('departmentSelect');
var submitButton = document.getElementById('submitButton');

submitButton.style.visibility = 'hidden';
departmentSelect.addEventListener('change', function() {
        if (departmentSelect.value !== '') {
submitButton.style.visibility = 'visible';
        } else {
submitButton.style.visibility = 'hidden';
        }
});

var checkboxes = document.querySelectorAll('input[type="checkbox"]');
for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('click', function() {
limitCheckboxSelections(this, 2);
        });
}
    });
function showForm() {
    var selectedDepartment = document.getElementById("departmentSelect").value;
    var departmentForm = document.getElementById("departmentForm");

    // Hide all forms
    document.getElementById("seaiteForm").style.display = "none";
    document.getElementById("sabhForm").style.display = "none";
    document.getElementById("shasForm").style.display = "none";
    document.getElementById("seasForm").style.display = "none";

    // Show the selected form and set the form action
    if (selectedDepartment === "SEAITE") {
        document.getElementById("seaiteForm").style.display = "grid";
        departmentForm.action = "proc-seaite.php";
    } else if (selectedDepartment === "SABH") {
        document.getElementById("sabhForm").style.display = "grid";
        departmentForm.action = "proc-sabh.php";
    } else if (selectedDepartment === "SHAS") {
        document.getElementById("shasForm").style.display = "grid";
        departmentForm.action = "proc-shas.php";
    } else if (selectedDepartment === "SEAS") {
        document.getElementById("seasForm").style.display = "grid";
        departmentForm.action = "proc-seas.php";
    } else {
        // If no department is selected, hide all forms and set the form action to a default value or leave it empty
        departmentForm.action = "";
    }
}
document.addEventListener("DOMContentLoaded", function() {
  var sscBanner = document.querySelector(".banner-ssc");
  var depBanner = document.querySelector(".banner-dep");
  var sscSection = document.querySelector(".ssc");
  var depSection = document.querySelector(".departmental");
  var votingForm = document.querySelector(".voting-form");


  sscBanner.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default anchor link behavior

    // Toggle visibility of SSC section
    if (sscSection.style.display === "grid") {
      sscSection.style.display = "none"; // Hide the SSC section
      votingForm.style.display = "none"; // Hide the registration form
    } else {
      sscSection.style.display = "grid"; // Show the SSC section
      depSection.style.display = "none"; // Hide the departmental section
      votingForm.style.display = "grid"; // Show the registration form
    }

    // Scroll to the SSC section
    sscSection.scrollIntoView({ behavior: "smooth" });
  });

  depBanner.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default anchor link behavior

    // Toggle visibility of departmental section
    if (depSection.style.display === "grid") {
      depSection.style.display = "none"; // Hide the departmental section
      votingForm.style.display = "none"; // Hide the registration form
    } else {
      depSection.style.display = "grid"; // Show the departmental section
      sscSection.style.display = "none"; // Hide the SSC section
      votingForm.style.display = "grid"; // Show the registration form
    }

    // Scroll to the departmental section
    depSection.scrollIntoView({ behavior: "smooth" });
  });
});
    </script>
</body>
</html>