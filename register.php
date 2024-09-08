<?php
    include "database.php";

 if(isset($_POST["register"]))
    {
        $username2 = $_POST['username'];
        $password2 = $_POST['password'];

        $sql3 = "INSERT INTO akun (`username`, `password`) VALUES ('$username2', '$password2')";
        if ($db->query($sql3)) {
            header("location: index.php");

        }else {
            echo "tidak masuk";
        }

        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
  </div>
</nav>
 <form action="register.php" method="POST">
    <div class="Login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bg-white shawod rounded">
                        <div class="row">
                            <div class="form-left h-100 py-5 px-5">

                                <form action="" class="row g-4">
                                    <div class="col-12">
                                        <label for="">username <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="text" class="form-control" placeholder="username" name="username">
                                        </div> 
                                    </div>

                                    <div class="col-12">
                                        <label for="">password<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="text" class="form-control" placeholder="password" name="password">
                                        </div> 
                                    </div>

                                    <div class="col-12">
                                        <button href   type="Submit" class="btn btn-primary px-4 float-end mt-4" placeholder="register" name="register"   class="button">Register</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>