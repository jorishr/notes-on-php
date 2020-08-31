<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
        // array is an ordered integer-indexed collection of objects
        $numbers = array(1,2,3,4,5);
        //echo $numbers;  //-> notice Array to string conversion
        //print readable:
        echo print_r($numbers);
        echo '<br/><br/>';
        $mixed = array(1, '1', array('hello', 2, 'world'));
        echo $mixed[0];
        echo '<br/><br/>';
        //echo $mixed[2];   -> notice
        echo print_r($mixed[2]);
        echo '<br/><br/>';
        echo $mixed[2][0]; //-> hello
        
        //change values at index or at end position
        $mixed[0] = 'first';
        $mixed[] = 'last';  //inserted at the end, index 3
        
        echo '<br/><br/>';
        $newArr = [1,2,3];
        echo print_r($newArr);
    ?>
    <!--  indented array format -->
    <pre>
        <?php echo print_r($mixed)?>
    </pre>

    <!-- Associative arrays, order doesn't matter, key-value pairs, object indexed -->
    <br/>
    <?php 
        $assoc = array("key" => "value", "age" => 35);
        echo "<pre>";
        echo print_r($assoc);
        echo "</pre>";
        echo $assoc["key"];
        echo "<br/>";
        echo $assoc["age"];

        //change value of key
        $assoc["key"] = "hello";
        echo "<br/>";
        echo $assoc["key"]; //-> hello
        
        //classic number index array can be written as associative array
        echo "<br/>";
        $myArr = [0 => 1, 1 => 2, 2 => 3];
        echo print_r($myArr);
    ?>
</body>
</html>