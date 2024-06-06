


<?php  
    $bgcolor =" #df912c";
    $tcr = "#403346";
    $errname = $erremail = $errwebsite = $errgender = "";
    $name = $email = $website = $comment = $gender = "";

    if($_SERVER['REQUEST_METHOD']  == "POST"){

        if(empty($_POST["name"])){
            $errname = "Name is required!";
        }else{
            $name      = validate($_POST["name"]); 
        }

        if(empty($_POST["email"])){
            $erremail = "Email is required ";
        }else{
            $email     = validate($_POST["email"]);

        }
         
        if(empty($_POST["website"])){
            $errwebsite = "Website is Required";
        }else{
            $website   = validate($_POST["website"]);

        }

        $comment   = validate($_POST["comment"]);
       
        if(empty($_POST["gender"])){
            $errgender = "Gender is required";
        }else{
          
            $gender    = validate($_POST["gender"]);
        }

       
        echo "Name:". $name."<br>";
        echo "email:". $email. "<br>";
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
                <td><input type="text" name="name" id=""><?php echo $errname;?></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id=""><?php echo $errname;?></td>
            </tr>

            <tr>
                <td>website:</td>
                <td><input type="text" name="website" id=""><?php echo $errname;?></td>
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
                <?php echo $errname;?>
                </td>
            
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="" value="submit"></td>
            </tr>

        </table>
        </form>
        
        

    </section>


    <section class="footer">
     <h2>footer</h2>
    </section>

</div>

</body>
</html>