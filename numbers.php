<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers in PHP</title>
</head>
<body>
    <?php 
        echo rand(0, 10);
        echo '<br/>';
        echo abs(rand(-100, 100));
        echo '<br/>';
        //modulo
        echo fmod(20,7);    //-> 6
        echo '<br/>';
        echo pow(2,3);       //-> 8
        echo '<br/>';
        //add to or increment, substract, multiply and divide
        $var1 = 1;
        $var1 += 5;
        $var1 -= 4;
        $var1 *= 2;
        $var1 /= 4;
        echo $var1;  //-> 1
        // shortcodes: $var1++, $var1--
        echo '<br/>';
        
        // 1 + '1' -> 2 and 1 + '1 hello' -> 2, rest of string is ignored
        
        //delete by 0 is an ilegal operation
        echo 2.14 + 7;  //-> 9.14
        echo '<br/>';
        //round(), ceil() and floor() to round off floating point numbers
        echo round(2.14);   //-> 2
        echo '<br/>';
        echo round(2.1434, 2);   //-> 2.14
        
        echo '<br/>';
        echo is_int(2.14);  //-> 0 (false)
        echo '<br/>';
        echo is_float(2.14);    //-> 1 (true)

    ?>
    
</body>
</html>