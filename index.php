<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
 
    <?php 
    if(isset($_GET['param'])){
        if(!empty($_GET['param'])){
            echo  "<center>" . $_GET['param'] . "</center>"; 
        }
    }
?>


        <form method="post" > 

            <input type="text" name="username" placeholder="username" >
            <input type="password" name="password" placeholder="password">
            <button type="submit" formaction="./login.php"> LOGIN </button>

        </form>

    </div>
   
</body>
</html>