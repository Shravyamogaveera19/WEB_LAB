<!DOCTYPE html>
<html>
    <head>
        <title>Display Date</title>
    </head>
    <body>
        <form method='POST'>
            <h4>Enter Information</h4>
            <textarea name="text_info" rows="6" cols="50" placeholder="enter your text"></textarea>
            <input type='submit' value='submit'>
            <input type='reset' value='reset'>
        </form>
        <p>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $info = trim($_POST["text_info"]);

                    if(!empty($info)){
                        $file = fopen("form.txt",'a');

                        fwrite($file,$info . PHP_EOL);

                        fclose($file);

                        echo "<script>alert('The information submitted successfully\\n" . htmlspecialchars($info) . "');</script>";

                    }
                    else{
                        echo "<script>alert('Enter information');</script>";
                    }
                }
            ?>
        </p>
    </body>
</html>
