<?php
    $db = new mysqli('localhost', 'root', '', 'zadanie domowe');


    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
      }

      $sql = 'SELECT * FROM `posty`' ;
      $query = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Witam, to muj blogasek UwU</h1>
    <h3>Kamil Strzelecki 4TI</h3>
    <?php 
        while($row = $query->fetch_array()){
            ?>
                <div>
                    <h2><?php echo $row[1]; ?></h2>
                    <p><?php echo $row[3]; ?></p>
                    <p><?php echo $row[2];?></p>
                </div>
            <?php
        }
    ?>


            <a href = './formularz.html'> TUTAJ SE DODAJESZ NI </a>
    

</body>
</html>