<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Mysterious Eels</title>
    <link rel="stylesheet" type="text/css" href="boats.css" />
    <script src="jquery-2.1.4.min.js"></script>
    <script src="boats.js"></script>
</head>
<body>
<div class="overlay"></div>
<!--Type of boat-->
<div id="header">
    <p>High Performance Boats</p>
</div>
<!--Navigation bar-->
<div id="nav" class="nav">
    <ul class="nav">
        <li><a href="boat1.php">Center Consoles</a></li>
        <li><a href="boat2.php">Deck Boats</a></li>
        <li><a href="boat3.php">Cuddy Cabins</a></li>
        <li><a href="boat4.php" class="active">High Performance</a></li>
        <li><a href="boat5.php">Jet Boats</a></li>
        <li><a href="boat6.php">Pontoon Boats</a></li>
    </ul>
</div>
<div id="body">
    <!--Boat information-->
    <img src="http://www.boatus.com/Assets/www.boatus.com/buyer/img/new-boater/high-performance.jpg">
    <h2>About This Boat</h2>
    <p>This boat is good for day cruising. There is no given max to how many people can be on board.
        The size ranges from 20-50 ft. It has an outboard engine,
        inboard engine, sterndrive engine.</p>
    <h3>Rental Prices:</h3>
    <h4>Half Day: $550</h4>
    <h4>Full Day: $725</h4>
</div>
<div>
    <!--Reservation information-->
    <form action="users.php" method="post" id="form">
        First name
        <input type="text" name="fname" id="fname"/><br>
        Last name
        <input type="text" name="lname" id="lname"><br>
        E-mail
        <input type="text" name="email" id="email"><br>
        Password
        <input type="password" name="pword" id="pword"><br>
        Phone Number (Optional)
        <input type="number" name="phone" id="phone"><br>
        Credit Card Number
        <input type="number" name="ccard" id="ccard"><br>
        CVV Number
        <input type="number" name="cvv" id="cvv"><br>
        Date for Reservation
        <input type="date" name="reservedate" id="reservedate"><br>
        Time Slot for Reservation
        <select id="timeslot" name="timeslot">
            <option value="Half Day">Half day</option>
            <option value="Full Day">Full day</option>
        </select>
        <input type="hidden" name="boattype" value="High Performance"><br>
        <input type="submit" value="Submit" name="formSubmit" />
    </form>
</div>
<div id="footer">
    <!--Takes the user back to the home page-->
    <button id="myButton" class="homeButton">Back to Home page</button>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "firstpage.html";
        };
    </script>
</div>
</body>
</html>