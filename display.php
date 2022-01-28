<?php
    include "action.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Client Info</title>
</head>
<body>
    <div class="container ">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light" style="text-decoration: none;">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">S/n</th>
                <th scope="col">Username</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email-Address</th>
                <th scope="col">Password</th>
                </tr>
            </thead>


            <tbody>
                <?php
                    $sql = "Select * From `crud`";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($document =mysqli_fetch_assoc($result)
                        ) {
                            $id = $document['id'];
                            $username = $document['username'];
                            $firstname =$document['firstname'];
                            $lastname= $document['lastname'];
                            $email= $document['email'];
                            $password = $document['password'];

                            echo '
                            <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$username.'</td>
                            <td>'.$firstname.'</td>
                            <td>'.$lastname.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password.'</td>
                            </tr>
                            ';  
                        }
                    }
                    
                ?>
            </tbody>
        </table>
    </div>

    
</body>
</html>