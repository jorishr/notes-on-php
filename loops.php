<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <!-- FOR EACH -->
    <?php 
        $numArr = [1,2,3,4,5];
        foreach($numArr as $num){
            echo "{$num} ";
        }
        //associative arrays: foreach($arr as $key => $val)
        echo "<br>";
        $person = [
            "first_name" => "Joris", 
            "last_name" => "Raymaekers",
            "address" => "Here",
            "telephone" => "0472892289",
            "zip_code" => 22324
        ];
        foreach($person as $attr => $data){
            $formatAttr = ucwords(str_replace("_", " ", $attr));
            echo "{$formatAttr}: $data<br/>";
        }
    ?><br/>
    <!-- CONTINUE: skip over to the next iteration -->
    <?php 
        for($i = 0; $i <= 10; $i++){
            //only print odd nums
            if($i % 2 == 0){ continue; }
            echo $i;
        }
        //continue by default has argument 1: continue(1), if you use continue(2) it will try to skip the parent loop.
        //same thing for break, break(1) or break(2)
    ?><br>
    <!-- ARRAY POINTERS -->
    <?php 
        //when using a loop the pointer, by default starts at the first value or index 0
        //to see the current pointer value:
        //the next, prev, end and reset functions can move the pointer manually
        $arr = array(10,100,1000);
        echo "Current pointer value: " . current($arr);
        echo "<br>";
        
        next($arr);
        echo "Current pointer value: " . current($arr);
        echo "<br>";
        
        prev($arr);
        echo "Current pointer value: " . current($arr);
        echo "<br>";
        
        end($arr);
        echo "Current pointer value: " . current($arr);
        echo "<br>";
        
        reset($arr);
        echo "Current pointer value: " . current($arr);

        //useful for while loops over database data
        //the loop will go on as long as there's meaningful data
        while($data = current($data)){
            //do smth
            next($data);
        }


    ?>

</body>
</html>