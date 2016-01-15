<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="boats.css" />
    <script src="jquery-2.1.4.min.js"></script>
    <script src="boats.js"></script>
    <title>The Mysterious Eels</title>
</head>
<body>
<div class="overlay"></div>
<!--Type of boat-->
<div id="header">
    <p>The Mysterious Eels</p>
</div>
<!--Navigation bar-->
<div id="nav" class="nav">
    <ul class="nav">
        <li><a href="boat1.php" class="active">Center Consoles</a></li>
        <li><a href="boat2.php">Deck Boats</a></li>
        <li><a href="boat3.php">Cuddy Cabins</a></li>
        <li><a href="boat4.php">High Performance</a></li>
        <li><a href="boat5.php">Jet Boats</a></li>
        <li><a href="boat6.php">Pontoon Boats</a></li>
    </ul>
</div>
<div id="body">
    <!--Boat information-->
    <img src="http://www.cobiaboats.com/wp-content/uploads/2011/12/Cobia-217-Center-Console.jpg">
    <h2>About This Boat</h2>
    <p>This boat is good for freshwater fishing, saltwater fishing, and day cruising. There is
        No set max for how many people can fit, so throw as many on as you can. The boats are 18-48 ft
        and have an outboard engine.</p>
    <h3>Rental Prices:</h3>
    <h4>Half Day: $320</h4>
    <h4>Full Day: $375</h4>
</div>
<!--Reservation information-->
<div>
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
        <input type="hidden" name="boattype" value="Center Consoles"><br>
        <input type="submit" value="Submit" name="formSubmit" />
    </form>
</div>
<!--Takes the user back to the home page-->
<div id="footer">
    <button id="myButton" class="homeButton">Back to Home page</button>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "firstpage.html";
        };
    </script>
</div>
</body>
</html>