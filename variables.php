<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tryout</title>
</head>
<body>
    <?php
        //my first single line comment
        echo 'Hello world!' . ' This is my first PHP page';
    ?>    
    <br/>
    <br/>
    <?php echo 'This is a second line after a double html line break!'?>
    <br/>
    <br/>
    <?php 
        echo 'The sum of 2 and 3 is: ';
        echo 2 + 3;
        echo '<br/>' . '<br/>';
        $myVar = 'Hello variable!';
        echo $myVar;

        //why use double quotes for strings in php?
        echo '$myVar is not computed with single quote strings<br/><br/>';
        echo "$myVar Greetings from the computed variable string value<br/><br/>";
        echo "{$myVar}!!<br/><br/>";
        echo "\" \" These are escaped values inside a string<br/><br/>";

        //concat shortcode
        $var1 = 'Hello';
        $var2 = 'World';
        $var3 = ' ';
        
        $var1 .= $var3 .= $var2;
        echo $var1; 

        //string functions
        echo '<br/><br/>';
        echo strtolower($var1);
        echo '<br/><br/>';
        echo strtoupper($var1);
        echo '<br/><br/>';
        echo ucfirst('hello world');
        echo '<br/><br/>';
        echo ucwords($var1);
        echo '<br/><br/>';     
        echo strlen($var1);
        //trim() to remove excess white space
        //strstr() to find substring, NOTE: return substring + remaining char in str
        //str_replace('find', 'replaceWith')
        //substr('baseStr', startPos, endPos) to make substring from existing string 
        echo '<br/><br/>';     
        echo substr($var1, 5, 10);  //-> World
        echo '<br/><br/>';     
        echo strpos($var1, 'World');    //-> 6
        echo '<br/><br/>';     
        echo strchr($var1, 'r');    //-> rld
        
        echo '<br/><br/>';     
        echo '<br/><br/>';     
        
        //DUMP variable info for debugging: type and value
        var_dump($var1);    // -> string(11) "Hello World"

        //GET ALL DEFINED VARIABLES AT GIVEN MOMENT IN CODE
        echo print_r(get_defined_vars());   
        //echo print_r(get_defined_functions());
        //echo print_r(get_defined_constants());

        echo "<br/>";
        //backtrace function calls that have been made
        echo print_r(debug_backtrace());

    ?>
</body>
</html>