<!DOCTYPE html>
<html>
    <head>
        <title>Display Date</title>
    </head>
    <body>
        <form method="POST">
        <h1>Enter a number</h1>
        <input name="number" required/>
        <button type="submit">Submit</button>
        </form>
        <p>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["number"];
            if($num == 0 ||$num ==1){
            echo "The number is neither prime nor not prime";
            return;
            }
                    
            $flag = 0;
            for($i=2;$i <= sqrt($num) ;$i++){
                if($num % $i == 0){
                    $flag=1;
                    break;
                }
            }
            if($flag == 0)
            echo "The number is a prime number";
            else
            echo "The number is not a prime number";
        }
        ?>
        </p>
    </body>
</html>
