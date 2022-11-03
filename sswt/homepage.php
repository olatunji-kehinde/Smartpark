<?php include("home.php"); ?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="homepage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">SMART PARK RESERVATION</div>
            <ul>
                <li><a href="homepage.php">Home</b></li>
                <li><a href="cancel_html.php">Check Reservation</a></li>
                <li><a href="logout.php">Sign-Out</a></li>
            </ul>
            <div class="welcome">
                Hi, <?php echo $name;?>!
            </div>
        </nav>
        <div class="greet">
            <div class="greetings">
                <span><?php echo $greet; ?></span><br>
                <span><?php echo $curr_day.", ".$curr_date; ?></span>
            </div>
        </div>
        <div class="content-left">
            <div class="left_head">
                Want To Check For A Parking Spot? <br> We've Got It Here!
            </div>
            <form action="home.php" method="post">
            <div class="veh_type">
                What's your vehicle type? <br><br>
                <input list="veh_type" name="veh_type" class="type" required>
                    <datalist id="veh_type" >
                        <option>--------------</option>
                        <option value="Bicycle">Bicycle</option>
                        <option value="MotorCycle">MotorCycle</option>
                        <option value="Tricycle">Tricycle</option>
                        <option value="four wheel">Motor Vehicle</option>
                    </datalist>
            </div>
        </div>
        <div class="content-right">
            <div class="right_head">
                Want To Reserve A Spot Or Just Park On The Go?
            </div>
            <div class="rdiobtn">
                <input type="radio" name="r1" value="reserve" id="radio1" required>
                <label for="radio1"><i class="fas fa-car"></i> Reserve a Spot</label><br><br><br><br>

                <input type="radio" name="r1" value="otg" id="radio2">
                <label for="radio2"><i class="fas fa-clock"></i> Get Me A Spot Now</label>
            </div>
            <div>
                <input type="submit" value="Next" name="next">
            </div>
            </form>
        </div>
    </body>
</html>