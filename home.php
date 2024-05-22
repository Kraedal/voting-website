<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/logousl.ico">
</head>
<body>
        <header class="main-header flex">
            <div>
                <img class="logo" src="images/logousl.png" alt="">
            </div>
            <nav>
                <ul class="navigation flex">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="tally.php">TALLY</a>
                    </li>
                    <li>
                        <a href="#rules">RULES</a>
                    </li>
                </ul>
            </nav>
            <form action="logout.php">
            <button class="Btn">
            <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
            <div class="text">Logout</div>
            </button>
        </form>
        </header>
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sregistration";
    
            // Establish database connection
            $conn = new mysqli($servername, $username, $password, $dbname);
    
            /// Fetch data from login table
$query = "SELECT name FROM login";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    // Fetch all rows
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
    }
echo "<h1 style='text-align: center;'>Welcome, $name!</h1>";
} else {
    echo "No data available.";
}

$conn->close();
        
			?>

        <div class="container">
            <div  class="introduction">
            <form action="voting.php" method="POST">
                <h1>Are you ready to make a difference? Join us as we strive to amplify the voices of the people and 
                    advocate for the issues that matter most.</h1>
                <br>
                <h3>Remember to vote wisely!</h3>
                <br>
                <br>
                <button type="submit">Vote Now</button>
        </div>
        </div>


        <!-- Start of the Home Page -->
        <div class="registration">
            <h1>Welcome to USL<br>Registration <br>Website!</h1>
            <form method="POST">
                <button type="submit"><a href="registration.php">REGISTER</a></button>
            </form>
    <img class="lead-pic" src="images/leadership.png" alt="">
</div>

        <div class="cards">
            <div>
                <h1>Online Registration</h1>
                <p>- Hassle-free Registration straight from your own computer.</p>
            </div>
                <img src="images/checklist.png" alt="">
                <img src="images/efficiency.png" alt="">
            <div>
                <h1>Efficieny</h1>
                <p> As they say, "Time is Money" and we ensure that in this website.</p>
            </div>
        </div>

        <div class="rules" id="rules">
        <h1 >RULES</h1>
        <br>
        <p>Universty of Saint Lous as a Catholic educational institution commits itself to the training of Christian Leaders in preparation for their involvement in the various communities to which they will belong after their graduation.</p>

        <p>In view of the foregoing, the following regulations are set as guidelines for the election of the SSC:</p>
        <ul>
        <li>1.The SSC Elections shall be held in a general election, the schedule of which will be set by the Committee on Student Elections (CSE), composed of the SSC Advisers, the Prefect of Discipline and the Dean od Student Affairs & Services who will act as the Chairman. The (CSE) shall be vested with the authority to decide on all issues pertaining to the SSC, Departmental and year-level elections and shall therefore have the following powers and functions:
        <ul>   
        <li>1.1. Decide on the qualifications of candidates;</li>
        <li>1.2. Recognize and accredit student political parties;</li>
        <li>1.3. Manage and supervise the conduct of elections;</li>
        <li>1.4. Decide and answer in writing all inquiries of students which pertain to the election;</li>
        <li>1.5. Decide on all matters of protests, if there be any;</li>
        <li>1.6. Proclaim the winners.</li>
        </ul> 
    </li>
        <li>2. Any candidate who aspires to run for any position in the SSC must comply with the set requirements for qualifications by the Committee on Student Elections (CSE).</li>
        <li>3. Every candidate must belong to a student political party accredited by the Committee on Student Elections (CSE) based on the following:
        <ul>    
        <li>3.1. There must be a complete line-up of the party to be accredited, from the SSC to the Department level;</li>
        <li>3.2. No candidate without any party affiliation will be allowed to run.</li>
        </ul>
        <li>4. In the event that the Committee On Student Elections (CSE) Chairman discovers a ground for disqualification for any of the candidates of a political party, only such candidate will be disqualified and it is incumbent on the standard bearer to select an alternate and the name/s of such should be submitted in writing to the Committee on Student Elections (CSE) a week before the scheduled elections. It is the responsibility of the Committee on Student Elections (SE) to inform in writing the standard bearer of the disqualification two weeks prior the scheduled election. Deadlines/Dates for filing shall be determined by the Committee on Student Elections (CSE).</li>

        <li>5. All political parties should comply with the deadline for filing of certificate of candidacy.
        It is the responsibility of the standard bearer to see to it that all the candidates in his party have the complete requirements for qualification and that his/her party should file the candidacy as one, in three computerized copies.</li>
        </ul>
    </div>

    <div class="about" id="about">
        
        <h1 id="about">ABOUT THIS WEBSITE</h1>
        <br>
        <!-- Create a simple explanation why I make this website -->
        <p>This website was created for us to pass our Subject Web Programming and Database Management and System.<br>
        It uses HTML, PHP, CSS, and Javascript for the Appearance and Functionalities and MySQL for the database.<br>
        This project was made by Jacob Ong, Ramon Albano, and Paul Bayle.</p>
        

    </div>
</body>
</html>