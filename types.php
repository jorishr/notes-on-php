<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types</title>
</head>
<body>
    <?php $var1 = (array) array(1,2,3,4,5)?>
    type of var: <?php echo gettype($var1)?><br>
    print arr: <pre><?php echo print_r($var1); ?></pre>
    <!-- type juggling: let php's algorithm do the conversion -->
    <!-- type casting: explicitely convert to other datatype -->
    Type jugling<br>
    <?php 
        $strNum = "3";
        $strNum += 3;
        echo $strNum;   // -> 6, integer
        echo "<br>";
        echo gettype($strNum);
        $str = $strNum . "66 is the number of the beast";
        echo "<br>";
        echo $str;
        echo "<br>";
        echo gettype($str);
    ?><br>
    Type casting<br>
    <?php 
        //settype is a permanent type setter
        //$var = (string) "hello" only sets the type at that very moment
        $str1 = "hello";
        settype($str1, "string");
        echo gettype($str1);
        echo "<br>";

        $num1 = 1;
        $num2 = 2;
        //conver to str
        settype($num1, "string");
        (string) $num2; //-> only becomes a string on this line of the code, no permanent change

        echo gettype($num1);    //-> string
        echo gettype($num2);    //-> intger
    ?><br />
    <!-- CONSTANTS -->
    <?php 
        define("MYCONSTANT", 100);
        echo MYCONSTANT;    //-> 100
    ?>

</body>
</html>