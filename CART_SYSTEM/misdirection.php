<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
    session_start();
    if (($_SESSION['count_item'] > 0) && (isset($_SESSION['cart0']) || isset($_SESSION['cart1']))){
        echo "<div class=\"pop_up0\" style=\"height:3rem; width:7rem; position: fixed; border-radius: 5px; right: 0; text-align: center; background-color: aqua;\">"."You have ".$_SESSION['count_item']." item(s) 😎"."</div>";
    }elseif ((isset($_SESSION['cart0']) || isset($_SESSION['cart1'])) && ($_SESSION['count_item'] <= 0)){
        echo "<div class=\"pop_up\" style=\"height:3rem; width:7rem; position: fixed; border-radius: 5px; right: 0; text-align: center; background-color: aqua;\">"."You have no item in cart 🤦‍♂️"."</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>just checking</title>
    <?php 
        if ($_SESSION["light_dark"] == "light"){ ?>
            <link rel="stylesheet" href="mis.css">
    <?php 
        }else {?>
    <link rel='stylesheet' href='dark.css'>
    <?php 
    }
    ?>
    

</head>
<body>
    <nav class="navi">
        <a href="home.php">Home</a> <a href="cat.php">Cart Page</a>
    </nav>
    
    <div class="fTot">
        <h3><?php echo $_SESSION["light_dark"] == "dark" ? "Hey ".$_SESSION["you"] . "," . " the night owl." : "Hey ".$_SESSION["you"] . "," . " the early bird.";?></h3>
        <p>
            Whats beautiful? <br>
            I had a friend at some point in my life,he had this gf in school,he was in Akungba at the time(i think)...whenever he talks about this girl you would think he was talking about beyonce or something,i mean its cool,well it was cool until he showed me a pic of her and i was dissapointed to say the least,she is not ugly at all but she is most definately not beyonce(not even close).It was like being promised a buggati and then all you got was a benz,ofcourse a benz is nice but its not a bugatti(just go with any spelling of my "bugati"). <br>

            But to my friend she was a bugati thats what he sees,think about that for a sec,there is a benz that my friend sees as a bugati,i see a benz,he sees a bugati.....i mean how the f##k can that happen,i see a benz,thats truth_one...he sees a bugati,thats truth_two and we both looking at thesame thing...it shows how unreliable our senses/feelings are when it comes to the truth,you could feel like you are not even making any progress but in truth you are moving so fast if you just stop.It would crush you(👈 see what i did there?).
        </p>
    </div>
</body>
</html>