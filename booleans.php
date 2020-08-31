<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleans, null and empty</title>
</head>
<body>
    <?php 
        $var1 = true;
        $var2 = false;
        echo is_bool($var1);
        //echoed as 1 and nothing through string conversion
    ?>
    <br>
    true echo's as: <?php echo $var1;?><br />
    false echo's as: <?php echo $var2;?>
    <br>
    <!-- NULL -->
    <?php 
        //null is explicitely nothing or no value
        $var3 = null;
        echo "is var null?"; echo is_null($var3);
        echo "<br>";
    ?>
    Echo of null: <?php echo $var3; ?><br>
    Echo of empty string: <?php echo ""; ?><br>
    Is empty string null?: <?php echo is_null(""); ?><br>
    A var that is not declared is null?: <?php echo $varUndeclared; //-> notice ?><br>
    A var value isset?<br>
    - when null: <?php echo isset($var3)?><br>
    - when empty string: <?php $var4 = ""; echo isset($var4)?><br>
    - when undeclared: <?php echo isset($varUndeclared)?><br>

    <!-- IS EMPTY: [], "", false, null but also 0, 0.0 and "0" -->
    <br>
    <?php 
        $empty1 = [];
        $empty2 = "";
        $empty3 = false;
        $empty4 = null;
        $empty5 = "0";
        echo empty($empty1); echo "<br>";
        echo empty($empty2); echo "<br>";
        echo empty($empty3); echo "<br>";
        echo empty($empty4); echo "<br>";
        echo empty($empty5); echo "<br>";
    ?>
</body>
</html>