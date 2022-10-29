<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();


$_SESSION['count_item'] == 0;
// $_SESSION['cart0'] = $_POST['cat0'];
// $_SESSION['cart1'] = $_POST['cat1'];

    
// echo $hold.$_POST['cat1'];

// $hold;
// $hold = array("0");


// echo $hold;
// print_r(array_keys($_POST));
// if (isset($_POST['cat0'])){
//     global $hold;
//     // $_POST['cart'];
//     $hold[] = $_POST['cat0'];
// }
// echo $hold[1];


// if ((isset($_POST['cat0']) || isset($_POST['cat1']))){
    
    
    
    // if (isset($_POST['cat0'])){
        
    // }
    // if (isset($_POST['cat1'])){
        
    //     echo count($hold);
        
    // }
    
    
function cart_manager0(){
        // array_push($hold,$_POST['cat0']);
        
        
        ++$_SESSION['count_item'];
        // global $hold;
        // $hold[] = $_POST['cat0'];
        // array_push($hold,$_POST['cat0']);
        // $GLOBALS['hold[]'] =$_POST['cat0'];
        // global $hold;
        // echo $hold[1];
        
}

function cart_manager1(){
        // array_push($hold,$_POST['cat1']);
        
        
        // echo count($hold);
        // global $hold;
        // $hey =array();
        
        // echo  $GLOBALS['hold'][1];
        // echo $hold[1];
        // if ($hold[1] == $_POST['cat1']){

        
    if ($_SESSION['count_item'] <= 0){
        $_SESSION['count_item'];
    }
    else{
        --$_SESSION['count_item'];
        
        
    }
            
            // $hold[] = $_POST['cat1'];
        // }
            
        
     
}

// f ((isset($_POST['cat0']) || isset($_POST['cat1']))){

if(array_key_exists('cat0', $_POST)) {
    // global $hold;
    // $hold[] = $_POST['cat1'];
    cart_manager0();
}
else if(array_key_exists('cat1', $_POST)) {
    cart_manager1();
}
if ((isset($_POST['cat0']) || isset($_POST['cat1']))){
    if ($_SESSION['count_item'] > 0){
        echo "<div class=\"pop_up0\" style=\"height:3rem; width:7rem; position: fixed; border-radius: 5px; right: 0; text-align: center; background-color: aqua;\">"."You have ".$_SESSION['count_item']." item(s) 😎"."</div>";
    }else{
        echo "<div class=\"pop_up\" style=\"height:3rem; width:7rem; position: fixed; border-radius: 5px; right: 0; text-align: center; background-color: aqua;\">"."You have no item in cart 🤦‍♂️"."</div>";
    }

}  
// for ($i = 0; $i < count($hold); $i++){
//     echo $hold[$i];
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cat ur ❤ out</title>
    
    <!-- <link rel="stylesheet" href="cart.css"> -->
    <?php 
        if ($_SESSION["light_dark"] == "light"){ ?>
    <link rel='stylesheet' href='light.css'>
    <?php 
        }else {?>
    <link rel='stylesheet' href='dark.css'>
    <?php 
    }
    ?>
    
    
    
</head>
<body>
    <nav class="navi">
        <a href="home.php">Home</a>  <a href="misdirection.php">Somewhere</a>
    </nav>
    <h3><?php echo $_SESSION["light_dark"] == "dark" ? "Hey ".$_SESSION["you"] . "," . " the night owl." : "Hey ".$_SESSION["you"] . "," . " the early bird.";?></h3>
    <form class="main_container" method="POST">
        
        <div class="gridders">
            <div class="bgImg">
                <img src="./images/one.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 5,050</h4>
                <!-- <input type="submit" name="cat0" value="a" placeholder="Add">
                <input type="submit" name="cat1" value="a"> -->
                <button type="submit" name="cat0" value="a" class="cat0">Add</button>
                <button type="submit" name="cat1" value="a" class="cat1">Remove</button>
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/two.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 7,850</h4>
                <button type="submit" name="cat0" value="b">Add</button>
                <button type="submit" name="cat1" value="b">Remove</button>
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/three.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 15,850</h4>
                <button type="submit" name="cat0" value="c">Add</button>
                <button type="submit" name="cat1" value="c">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/four.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 11,000</h4>
                <button type="submit" name="cat0" value="d">Add</button>
                <button type="submit" name="cat1" value="d">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/five.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 21,550</h4>
                <button type="submit" name="cat0" value="e">Add</button>
                <button type="submit" name="cat1" value="e">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/six.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 8,250</h4>
                <button type="submit" name="cat0" value="f">Add</button>
                <button type="submit" name="cat1" value="f">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/seven.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 7,950</h4>
                <button type="submit" name="cat0" value="g">Add</button>
                <button type="submit" name="cat1" value="g">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/eight.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 45,000</h4>
                <button type="submit" name="cat0" value="h">Add</button>
                <button type="submit" name="cat1" value="h">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/three.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 4,450</h4>
                <button type="submit" name="cat0" value="i">Add</button>
                <button type="submit" name="cat1" value="i">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/one.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 7,999,999</h4>
                <button type="submit" name="cat0" value="j">Add</button>
                <button type="submit" name="cat1" value="j">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/two.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 500</h4>
                <button type="submit" name="cat0" value="k">Add</button>
                <button type="submit" name="cat1" value="k">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/two.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 500</h4>
                <button type="submit" name="cat0" value="l">Add</button>
                <button type="submit" name="cat1" value="l">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/two.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 500</h4>
                <button type="submit" name="cat0" value="m">Add</button>
                <button type="submit" name="cat1" value="m">Remove</button>
                
            </div>
        </div>
        <div class="gridders">
            <div class="bgImg">
            <img src="./images/two.jpg" alt="">
            </div>
            <div class="info">
                
                <h4>&#8358 500</h4>
                <button type="submit" name="cat0" value="n">Add</button>
                <button type="submit" name="cat1" value="n">Remove</button>
                
            </div>
        </div>
        
        
    </form>
    <!-- <script>
        let lid,hid;

        hid = document.getElementByClass("cat0");
        lid = document.getElementByClass("bid");
        lid.value == hid.value;

    </script> -->
</body>
</html>