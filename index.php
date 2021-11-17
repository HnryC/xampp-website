<!DOCTYPE html>
<html>
    <head>
        <title>Ticket ordering for School of rock</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
        <script src="script.js" defer></script>
    </head>
    <body>
        <div class="page-top">
            <h1 class="page-title">School of Rock</h1>
            <div class="dropdown" data-dropdown>
                <button class="link menu" data-dropdown-button>Register</button>
                <div class="dropdown-menu">
                    <div class="user-input">
                        <form name="new_attendee" action="register.php" method="POST" autocomplete="off" id="myForm">
                            <div class="user-input">
                                First name :<br>
                                <input class="user-input-boxes" type="text" name="FIRST-NAME" autocomplete="false" required /><br>
                                Last name :<br>
                                <input class="user-input-boxes" type="text" name="LAST-NAME" autocomplete="false" required /><br>
                                Email :<br>
                                <input class="user-input-boxes" type="email" name="mail" autocomplete="false" required><br>
                                Date of birth :<br>
                                <input class="user-input-boxes" type="date" name="DOB" style="text-align:center;" required /><br><br>
                                <button type="submit" class="user-input-button">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <p>The School of Rock event is coming to School Thursday week 8. It will contain performances from fire eagle, Spinning Rocks, and Sebastian.
            These bands will play a mixture of their best sellers and some original songs.</p>
            <h1 style="display:inline">
            Testemonies for the Battle of the Bands concert.
            </h1>
                <div class="dropdown" data-dropdown style="display:inline">
                <button class="link menu" data-dropdown-button>Write a review</button>
                <div class="dropdown-menu">
                    <form name="new_attendee" action="quotes.php" method="POST" autocomplete="off" id="myForm">
                        <div class="user-input">
                            First name :<br>
                            <input class="user-input-boxes" type="text" name="first-name" autocomplete="false" required /><br>
                            Last name :<br>
                            <input class="user-input-boxes" type="text" name="last-name" autocomplete="false" required /><br>
                            Review :<br>
                            <input class="user-input-boxes" type="text" name="quote" autocomplete="false" required><br>
                            Rating :<br>
                            <select class="user-input-boxes" name="rating" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <button type="submit" class="user-input-button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
<?php
require('connect.php');
$sql = "SELECT quote,rating,firstName,lastName FROM quotes";
$result=mysqli_query($conn, $sql);
if(!$result){
    echo "ERROR: $sql. " . mysqli_error($conn);
    die();
}
$arr=$result -> fetch_all(MYSQLI_ASSOC);
foreach ($arr as $val) {
    echo "<div class='quotes'><div class='quote'> $val[quote]<br>$val[rating]/10 </div><p style='text-align:right; padding:0;'>
        <small><small>-$val[firstName] $val[lastName]</small></small></p></div>";
}
$result -> free_result();
$conn -> close();
?>
            
        </div>
    </body>
</html>
