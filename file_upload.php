



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

    <?php
    if(isset($_FILES['image'])){
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($filetmp,"images/" . $filename);

        echo "image uploaded successfully";
    }
    
    
    
    
    ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id=""><br><br>
            <input type="submit" name="" id="" value="submit">
        </form>

    </section>


    <section class="footer">
     <h2>footer</h2>
    </section>

</div>

</body>
</html>