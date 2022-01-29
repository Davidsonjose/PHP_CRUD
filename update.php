<?php
    include "action.php";


    $id = $_GET['updateid'];
    $sql = "Select * from `crud` where id= $id";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username']; 
    $firstname= $row['firstname'];
    $lastname= $row['lastname'];
    $email = $row['email'];
    $password=$row['password'];



    if (isset($_POST['submit'])) {
        $username= $_POST['username'];
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email = $_POST['email'];
        $password=$_POST['password'];

        $sql = "update `crud` 
        set id= $id,
        username='$username', 
        firstname='$firstname', 
        lastname='$lastname', 
        email='$email', 
        password='$password' where id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header('Location: display-update.php');
            exit();
        }else{
            die(mysqli_error($conn));
        }
    }



    // if (isset($_POST['submit'])) {
    //     $username = $_POST['username']; 
    //     $firstname= $_POST['firstname'];
    //     $lastname= $_POST['lastname'];
    //     $email = $_POST['email'];
    //     $password=$_POST['password'];

    //     $sql = "update `crud` set
    //     'username'= $username, 
    //     'firstname'=$fistname, 
    //     'lastname'= $lastname, 
    //     'email'= $email, 
    //     'lastname'=$lastname";

    //     $result = $conn->query($sql);

    //     if ($result == true) {
    //         echo "Record updated";
    //     }else{
    //         echo "error $sql $conn->error";
    //     }
    // }

    // if (isset($_GET['updateid'])) {
    //     $user_id= $_GET['updateid'];



    //     $result= $conn->query($sql);

    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {

    //         }
    //     }
    // }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/5/morph/bootstrap.min.css">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container" style="padding: 70px 50px 0px 0px;">
        <form method="post" >
            <div class="mb-3 w-50">
            <label for="formGroupExampleInput" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $username?>">
            </div>
            <div class="mb-3 w-50">
            <label for="formGroupExampleInput2" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" value="<?php echo $firstname ?>">
            </div>
            <div class="mb-3 w-50">
            <label for="formGroupExampleInput2" class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" value="<?php echo $lastname ?>">
            </div>
            <div class="mb-3 w-50">
            <label for="formGroupExampleInput2" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" value="<?php echo $password ?>">
            </div>
            <div class="mb-3 w-50">
            <label for="formGroupExampleInput2" class="form-label">email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $email ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>