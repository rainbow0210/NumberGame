<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Number Game</title>
    </head>
    <body>
        <div class="content">
            <h1>Number Game</h1>
            <a href="./index.html">Try again!</a>
        </div>
    </body>
</html>
<?php

    $answer = rand(1,10);
    $str_answer = (string) $answer;    
    $num = $_POST['number'];

    if($answer != $num){
        echo "<br>";
        echo "Incorrect:Try again...<br>";
        echo "Answer is {$str_answer}.";
    }

    if($answer == $num){
        echo "<br>";
        echo "Correct:Thank you!<br>";
        echo "Answer is {$str_answer}.";
    }

?>