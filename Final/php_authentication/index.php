<!DOCTYPE html>
<html>
    <head>
        <title>Display Date</title>
    </head>
    <body>
        <form method='POST'>
            <h4>Enter Information</h4><br><br>
            <label for='username'>Enter user name</label>
            <input type='text' name ='username'>
            <label for='password'>Enter password</label>
            <input type='password' name ='password'>
            <button type='submit'>Submit</button>
        </form>
        <p>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $uname = $_POST["username"];
            $password = $_POST["password"];
            $file = fopen("login.txt","r");

            $isValid = false;

            while(($line = fgets($file)) !== false){
             $content = trim($line);
             if($content == $uname . ":" .$password){
                $isValid = true;
                break;
             }
            }

            if($isValid)
                echo "<script>alert('Access granted');</script>";
            else
                echo "<script>alert('Access not granted');</script>";
        }
        ?>
        </p>
    </body>
</html>
