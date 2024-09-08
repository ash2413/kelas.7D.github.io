<?php
    include "database.php";
    include "login.html";

 if(isset($_POST["login"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM akun Where username='$username'
        AND password='$password'";

        $sql2 = "SELECT * FROM guru Where username2='$username'
        AND password2='$password'";

        $sql3 = "SELECT * FROM adm Where username3='$username'
        AND password3='$password'";
    
        $result = $db->query($sql);

        $relt = $db->query($sql2);

        $rlt = $db->query($sql3);

      
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            header("location: murid.html");

        }else {
            ;
        }

        if ($relt->num_rows > 0) {
            $dt = $relt->fetch_assoc();
            header("location: guru.html");

        }else {
            ;
        }

        if ($rlt->num_rows > 0) {
            $dat = $rlt->fetch_assoc();
            header("location: admin.html");

        }else {
            ;
        }

        
    }
    ?>