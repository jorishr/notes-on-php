<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <?php 
        //count size of array
        $num = [1,2,3,4,5];
        $person = ["firstname" => "Joris", "lastname" => "Raymaekers"];
        echo count($person);    //-> 2
        echo "<br/>";
        echo min($num); //-> 1
        echo "<br/>";
        echo max($num); //-> 5
        echo "<br/>";
        
        //sort and print, reverse sort and print
        //note: sort happens in place and modifies existing arr
        rsort($num); print_r($num);
        echo "<br/>";
        sort($num); print_r($num);
        //if strings, sorting is done alphabetically
        
        //implode: array to string with char seperation
        //explode: str to arr using divider char
        echo "<br/>";
        echo implode(" - ", $num);  //-> 1 - 2 - 3 - 4 - 5
        echo "<br/>";
        echo print_r(explode(" ", "Hello World")); //-> Array ( [0] => Hello [1] => World ) 
        
        //does value exist in arr?
        echo "<br/>";
        echo in_array(1, $num);     //-> 1
        echo "<br/>";
        echo in_array(100, $num);   //-> 0, nothing

    ?>
    
</body>
</html>