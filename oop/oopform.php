
<?php
include "function.php";
?>

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

    


    <form action="#" method="post">
        <table>
            <h1>Calculator</h1>
            <tr>
                <td>Enter the first number</td>
                <td><input type="number" name="num1" id=""></td><br><br>
            </tr>

            <tr>
                <td>Enter the second number</td>
                <td><input type="number" name="num2" id=""></td><br><br>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="" value="Calculate"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if(empty($num1) or empty($num2)){
            echo " <span style='color:red;'>Pleace fill the field</span> ";
        }

        $cal = new calculation;
        $cal->add($num1, $num2);
        $cal->sub($num1, $num2);
        $cal->mul($num1, $num2);
        $cal->div($num1, $num2);

        
    }
    ?>

    </section>


    <section class="footer">
     <h2>footer</h2>
    </section>

</div>

</body>
</html>