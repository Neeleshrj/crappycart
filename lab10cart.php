<html>
<title>
    Shopping Cart
</title>
<?php
    require 'dbconfig/config.php';
    session_start();
    

    if(isset($_POST['add'])){
        $name=$_POST['name'];
        
        $sql="SELECT * FROM itemdb WHERE name='$name'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $price=$row['price'];
        if($row['quantity']==0){
            echo '<script>alert("Item Out of Stock!")</script>';
        }
        else{
            array_push($_SESSION['cname'],$name);
            array_push($_SESSION['cprice'],$price);
            $newquan=$row['quantity']-1;
            $query = "UPDATE itemdb SET quantity ='$newquan' WHERE name='$name' ";
            $query_run = mysqli_query($con, $query);
            

        }
    }



    if(isset($_POST['logout'])){
    
    session_unset();
    echo '<script>window.location.href = "./lab10login.php";</script>';
    
    }

    
?>

<center>

    <body style="font-family: Courier New;">

        <h1>Availble Items</h1>
        <div id="cartitems">

            <?php 
                    $sql="SELECT * FROM itemdb";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($result)){ ?>
            <div id="itembox">
                <form method="post" action="lab10cart.php">

                    <h4><?php echo $row['name'] ?></h4>
                    <h4>Price:<?php echo $row['price'] ?></h4>
                    <h4>Available Stock:<?php echo $row['quantity'] ?></h4>

                    <input type="hidden" name="name" value="<?php echo $row['name'] ?>" />
                    <input type="submit" value="ADD" name="add" />

                </form>
            </div>

            <?php } ?>

            <form method="post">
                <input type="submit" value="Logout" name="logout" id="btn" />
            </form>
        </div>
        <div id="cart">
            <?php
                    if(count($_SESSION['cname'])==0){
                        echo "<h3>Cart is Empty!</h3>";
                    }
                    else if(count($_SESSION['cname'])>0){
                        echo "<h3>CART</h3>";
                        for($i=0;$i<count($_SESSION['cname']);$i++){
                            echo $_SESSION['cname'][$i],":",$_SESSION['cprice'][$i];;
                            echo "<br>";
                        }
                        ?>
            <h4>Total:<?php echo array_sum($_SESSION['cprice'])?></h4>

            <?php    
                    }
                
                ?>
        </div>
    </body>

</center>

</html>


<style>
#itembox {
    width: 200px;
    height: 200px;
    border: black solid 1px;
    text-align: center;
    display: inline-block;

}
</style>