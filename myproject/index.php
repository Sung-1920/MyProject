<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <a href="page_1.php">HOME PAGE</a>
    </p>

    <p>
        <a href="?user=ვაჟა&age=34">USER DATA </a> 
    </p>
    <?php    
            if(isset($_GET['user']) && isset($_GET['age'])){
            $user = $_GET['user'];
            $age = $_GET['age'];
            echo "<h1> $user სტუდენტია და არის $age წლის!! </h1>";
        }
        
    ?>

  <form method="GET">
    <input type="text" name="subject"> - საგანი
    <br><br>
    <input type="text" name="point"> - ქულა
    <br><br>
    <button type="submit">SEND DATA</button>
</form>

<?php

if (isset($_GET['subject']) && isset($_GET['point'])) {

    $subject = $_GET['subject'];
    $point = $_GET['point'];

    echo "გიორგიმ საგანში " . $subject . " მიიღო" . $point . " ქულა";
}

?>
  
</body>
</html>
