<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>syntex</title>

    <style>
        .container{
            width: 900px;
            margin: 0 auto; 
            background-color:green;
          
            

        }
        .header, .footer{background-color:black;text-align:center; color:#ffffff;}
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
        echo "i love php";
    
        ?>

    </section>


    <section class="footer">
     <h2>footer</h2>
    </section>

</div>

</body>
</html>