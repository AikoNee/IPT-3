<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Home</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
  
    <div class="container">
        <center>
    <a href="./index.php"><button type="button" >LOGOUT</button></a>
        <h1>Sibonga community college</h1>
</center>
</div>
<div class="container">
<center>
        <h3>Comments</h3>
        <?php
    include "dbconn.php";

    if(isset($_GET['user'])){
        $user=$_GET['user'];
            if(empty($user)){
                header("./index.php?error=You must log in first!");
                exit();
            }

            $query = $conn->query("SELECT * FROM comments");

            if($query->num_rows > 0){
                
                while($row = $query->fetch_assoc()){
                    echo " <br>" .  $row["AUTHOR"] . " <br>by: " . $row["Post"];
                }
            }
        

    }

    echo '<form action="./addcomment.php" method="post"> ';
    echo ' <input type="text" name="post" placeholder="Comment" required> ';
 echo '   <input type="text" name="author" value="'. $user . '" readonly> ';
  echo'  <input type="submit" value="submit"> ';

        

        ?>
      </form>
</center>
    </div>
</body>
</html>