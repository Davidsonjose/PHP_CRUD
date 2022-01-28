<?php
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        if (!empty($name) && !empty($email)) {
            
        } else{
            $error_message= "Please fill in all fields";
            echo $error_message;
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Name:
        <input type="name" name="name"><br><br>
        Email:
        <input type="email" name="email"><br><br>
        <input type="submit" value="Post data"><br>
    </form>


    <p>Name: <?php if (isset($name)) { ?>
        <?php echo $name ?>
  <?php  } ?></p>
    <p>Email: <?php if (isset($name)) { ?>
        <?php echo $email ?>
  <?php  } ?></p>
</body>
</html>