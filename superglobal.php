


<?php  
    $bgcolor =" #df912c";
    $tcr = "#403346";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>

    <style>
        .container{
            width: 900px;
            margin: 0 auto; 
            background-color:green;
          
            

        }
    
        .header, .footer{background-color:<?php  echo $bgcolor;?>;text-align:center; color:<?php echo $tcr; ?>;}
        .main-contain{height: 400px;  padding:20px;}
    </style>
</head>
<body>
    

<div class="container">
    <section class="header">
      <h2>header<h2>
    </section>


    <section class="main-contain">


    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        username:
        <input type="text" name="user" id=""><br><br>
        <input type="submit" name="" id="" value ="submit">
    </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] =="POST"){

            $name = $_REQUEST['user'];
            if(empty($name)){
                echo "<span style='color:red;'> you should fill the user field!! </span>";
            } else{
                echo " <span style='color:yellow;'>  you have submitted:". $name ."</span>";
            }

        } 
        ?>

    </section>


    <section class="footer">
     <h2>footer</h2>
    </section>

</div>

</body>
</html>