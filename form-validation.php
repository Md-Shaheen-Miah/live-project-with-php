


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

            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id=""></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id=""></td>
            </tr>

            <tr>
                <td>website:</td>
                <td><input type="text" name="website" id=""></td>
            </tr>

            <tr>
                <td>comment:</td>
                <td> <textarea name="comment" id=""></textarea></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                <input type="radio" name="gender" id="" value="male">Male
                <input type="radio" name="gender" id="" value="female">Female
                <input type="radio" name="gender" id="" value="others">Others
                </td>
            
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="" value="submit"></td>
            </tr>

        </table>
        </form>
        
        <?php
        if($_SERVER['REQUEST_METHOD']  == "POST"){
            $name      = validate($_POST["name"]);
            $email     = validate($_POST["email"]);
            $website   = validate($_POST["website"]);
            $comment   = validate($_POST["comment"]);
            $gender    = validate($_POST["gender"]);

        echo "Name:". $name."<br>";
        echo "Email:". $email."<br>";
        echo "Website:". $website."<br>";
        echo "Comment:". $comment."<br>";
        echo "Gender:". $gender."<br>";
        }

        

        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        
        ?>

    </section>


    <section class="footer">
     <h2>footer</h2>
    </section>

</div>

</body>
</html>