<?php
    if (session_start() == true){
        session_destroy();
    }

?>
<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['sign_in'] = $_POST['submit'];
    $empty;
    $_SESSION["you"] = isset($_POST['name'])? $_POST['name'] : $empty;
    $_SESSION["light_dark"] = isset($_POST['choice'])? $_POST['choice'] : $empty;
    header("Location: cat.php");
    exit();

}




// header("Location: member_area_1");
// exit();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catting</title>
    <link rel='stylesheet' href='home.css'>
    
</head>
<body>
    
    <div class="olm">
        <form action="" method= "POST">
            <div class="ok">
                <h1>Lets know you...</h1>
                <p>Whats your name?</p><br>
                <input type="text" name="name" value="">
                <br> <br>
                <!-- <label for=""></label><br>
                <input type="text">
                <br> <br> -->
                <label for="">A night owl or an early bed? 👇</label><br> <br>
                <input type="radio" name="choice" value="dark"> <label for="">Dark Mode</label><br> <br>
                <input type="radio" name="choice" value="light"> <label for="">Light Mode</label> <br><br>         <input type="submit" name="submit" id="" value="submit">
            </div>
     
        </form>
    </div>
    
</body>
</html>