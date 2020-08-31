<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>
    <!-- Global and local scope in PHP -->
    <?php 
        //by default the global variable is NOT accessible inside a local scope and vice versa
        //to access a global var inside a function you need the key word global
        $globalVar = 1;
        function myFunc(){
            return $globalVar++;
        }
        myFunc();   //-> undefined var

        function myFunc1(){
            global $globalVar;
            $globalVar++;
            return $globalVar;
        }
        $result = myFunc1();
        echo $result;   //->2
    ?>
</body>
</html>