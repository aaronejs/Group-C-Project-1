<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="login.php" method="post">
            <label for="username">Username *</label><br>
            <input type="text" name="username" placeholder="Username"><br>
            <label for="password">Password *</laber><br>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Log in"><br>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            if(!empty($username) || !empty($password)){
                if($username=="admin"){
                    if($password=="admin"){
                       //enter code after sucessful login.
                    }else{
                        echo "Wrong password<br>";
                    }
                }else{
                    echo "Wrong username<br>";
                }
            }else{
                echo "Please enter your username and password.";
            }
        }
        ?>
    </body>
</html>