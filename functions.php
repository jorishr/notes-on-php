<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php 
        //default arg value
        function sayHello($name = "world"){
            //do smth
            echo "Hello {$name}!<br/>";
        }
        sayHello("Joris");  //call fn with custon argument
        sayHello("Everybody");  //call fn with custon argument
        sayHello(null);  //will not trigger default value, outputs nothing

        //the number of arguments passed need to match the number of parameters, or pass in null
        echo "<br>";
        function add($arg1, $arg2){
            return $arg1 + $arg2;
        }
        $num1 = 3;
        $num2 = 4;
        $sum = add($num1, $num2);
        echo "The sum of {$num1} and {$num2} is {$sum}";
        
        echo "<br>";
        //return multiple values
        function add_subtr($num1, $num2){
            $add = $num1 + $num2;
            $subtr = $num1 - $num2;
            return array($add, $subtr);
        }
        $result1 = add_subtr(4,3)[0];
        $result2 = add_subtr(4,3)[1];
        echo "Sum: {$result1}, subtract: {$result2}";
        
        echo "<br>";
        //LIST to destructure arrays: assign array values to new variables
        list($result_sum, $result_subtr) = add_subtr(4,3);
        echo "Sum: $result_sum; Subtraction: $result_subtr";
        
    ?>
</body>
</html>