<!doctype html>

<?php include("reserve.php"); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Reserve</title>
        <link rel="stylesheet" href="reserve.css?ver=<?php echo rand(111,999)?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    </head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

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
        <div class="head">
            <form method="POST">
                Select The Spot Which Is Right For You <br>
                <span style="font-size: 25px; font-weight: 100;">Search date to check slots: </span>
                <input type="date" name="search" min="<?php echo $min_date; ?>" max="2022-12-31" required> 
                <input type="submit" value="Search" name="chk">
            </form>
        </div>
        <div class="slot-container">
            <?php for($i=1; $i<=11; $i++){ ?>
                <div class='slot' id='slot' name='slot' onclick="slot_details(<?php echo $i ?>)" style='border: 5px solid <?php echo ($occupancy[$i]=='empty')?'green':'red';?>'>
                    <div class='slot_no'>
                        <?php echo "S".$i; ?>
                    </div>
                    <div class='status' style='color: <?php echo ($occupancy[$i]=='empty')?'green':'red'; ?>'>
                        <span id="status"><?php echo $occupancy[$i]; ?></span>
                    </div>
                </div>
           <?php } ?>
        </div>
    </body>
    <!-- used ajax to send details of selected slot to php  -->
    <script type="text/javascript">
        function slot_details(slot_no) {
            //using ajax to input javascript/jquery data to php file
            $(function () {
                $.cookie("slotno", slot_no);
                alert("You have selected slot " + slot_no);
                if(!window.location.search){
                    window.location.href = 'http://localhost/sswt/booking_html.php';
                }
                else{
                    window.location.href = 'http://localhost/sswt/booking_html.php?cng';
                }
            });
        }   
    </script>
</html>