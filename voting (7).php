
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
        <div class="ssc">]
            <!-- Pakipalit na lang boss ramon yung loob ng input radio

                ganto yung lumabas sa gpt
<?php
// Assuming you have a database connection established

// Retrieve the list of presidents from your database
$query = "SELECT name FROM presidents";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Loop through the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];

        // Generate the HTML for each radio button
        echo '<div class="positions">';

        echo '<input type="radio" name="pres" value="' . $name . '"> ' . $name;

        echo '</div>';
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    // Handle the case when the query fails
    echo "Error: " . mysqli_error($connection);
}
?>
    }
    
            -->
            <form action="">
            <h1 id="SSC">Supreme Student Council</h1>
            <br>
            <h2>POSITIONS</h2>
            <label for="pres">President</label>
            <div class="positions">
                  <input type="radio" name="gender15" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender15" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender15" value="female">the
            </div>
            <label for="vice">Vice President</label>
            <div class="positions">
                  <input type="radio" name="gender14" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender14" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender14" value="female">the
            </div>

            <label for="exec">Exec. Secretary</label>
            <div class="positions">
                  <input type="radio" name="gender13" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender13" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender13" value="female">the
            </div>

            <label for="assoc">Assoc. Secretary</label>
            <div class="positions">
                  <input type="radio" name="gender12" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender12" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender12" value="female">the
            </div>

            <label for="tres">Treasurer</label>
            <div class="positions">
                  <input type="radio" name="gender11" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender11" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender11" value="female">the
            </div>

            <label for="aud">Auditor</label>
            <div class="positions">
                  <input type="radio" name="gender10" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender10" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender10" value="female">the
            </div>

            <label for="pro">Press Relation Officer</label>
            <div class="positions">
                  <input type="radio" name="gender9" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender9" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender9" value="female">the
            </div>
            <label for="Busman1">Business Manager</label>
            <div class="positions">
                  <input type="radio" name="gender8" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender8" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender8" value="female">the
            </div>
            <label for="Busman2">Business Manager</label>
            <div class="positions">
                  <input type="radio" name="gender7" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender7" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender7" value="female">the
            </div>    
            <label for="logis">Logistic Head</label>
            <div class="positions">
                  <input type="radio" name="gender6" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender6" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender6" value="female">the
            </div>

            <label for="socio">Socio-Cultural Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender5" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender5" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender5" value="female">the
            </div>
            <label for="ceca">CECA Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender4" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender4" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender4" value="female">the
            </div>
            <label for="sports">Sports Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender3" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender3" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender3" value="female">the
            </div>
            <label for="envi">Environmental Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender2" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender2" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender2" value="female">the
            </div>
            <label for="relcoor">Religious Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender1" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender1" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender1" value="female">the
            </div>            
            <button type="submit">Submit</button>
        </form>
        </div>
        <div class="departmental">
            <form action="">
            <h1 id="department">Departmental</h1>
            
            <label for="dep" id="dep1">Department</label>
            <select>
                <option value="1">SEAITE</option>
                <option value="2">SABH</option>
                <option value="3">SHAS</option>
                <option value="4">SEAS</option>
            </select>
        <h2>POSITIONS</h2>
        <label for="pres">President</label>
            <div class="positions">
                  <input type="radio" name="gender15" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender15" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender15" value="female">the
            </div>
            <label for="vice">Vice President</label>
            <div class="positions">
                  <input type="radio" name="gender14" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender14" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender14" value="female">the
            </div>

            <label for="exec">Exec. Secretary</label>
            <div class="positions">
                  <input type="radio" name="gender13" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender13" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender13" value="female">the
            </div>

            <label for="assoc">Assoc. Secretary</label>
            <div class="positions">
                  <input type="radio" name="gender12" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender12" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender12" value="female">the
            </div>

            <label for="tres">Treasurer</label>
            <div class="positions">
                  <input type="radio" name="gender11" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender11" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender11" value="female">the
            </div>

            <label for="aud">Auditor</label>
            <div class="positions">
                  <input type="radio" name="gender10" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender10" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender10" value="female">the
            </div>

            <label for="pro">Press Relation Officer</label>
            <div class="positions">
                  <input type="radio" name="gender9" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender9" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender9" value="female">the
            </div>
            <label for="Busman1">Business Manager</label>
            <div class="positions">
                  <input type="radio" name="gender8" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender8" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender8" value="female">the
            </div>
            <label for="Busman2">Business Manager</label>
            <div class="positions">
                  <input type="radio" name="gender7" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender7" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender7" value="female">the
            </div>    
            <label for="logis">Logistic Head</label>
            <div class="positions">
                  <input type="radio" name="gender6" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender6" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender6" value="female">the
            </div>

            <label for="socio">Socio-Cultural Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender5" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender5" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender5" value="female">the
            </div>
            <label for="ceca">CECA Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender4" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender4" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender4" value="female">the
            </div>
            <label for="sports">Sports Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender3" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender3" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender3" value="female">the
            </div>
            <label for="envi">Environmental Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender2" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender2" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender2" value="female">the
            </div>
            <label for="relcoor">Religious Coordinator</label>
            <div class="positions">
                  <input type="radio" name="gender1" value="male">What
              </div>
              <div class="positions">
                  <input type="radio" name="gender1" value="female">if
              </div>
              <div class="positions">
                <input type="radio" name="gender1" value="female">the
            </div> 
            <button type="submit">Submit</button>
        
            </form>
        </div>
    </div>
<script>
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