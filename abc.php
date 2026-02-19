<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <?php
     
        $a=30;
        $b="30.00";
        $c="Aryan";
        $d=true;
        $e=null;
        $f=12;
        $g="Aryan";
        $h = array(7,9,2,3,4);
        const hello="Hello World";
        
        
        var_dump($c);
        var_dump($a);
        var_dump($b);
        var_dump($d);
        var_dump($e);
        var_dump($h);
        echo "<br><br>";

        function add(){
            $x="abc";
            $$x=9;
            echo $abc."<br><br>";

            define ("m","Welcome to php");
            echo m;
            echo "<br><br>The line of this code is :".__LINE__;
            echo "<br><br>The file an its location is :".__FILE__;
            echo "<br><br>The Directory of this file is :".__DIR__;
            echo "<br><br>The function of this is :".__FUNCTION__;
            }
        add();

        echo "<br><br>".hello."<br><br>";
 
        echo $a<=>$b."<br><br>"; // -1 if a is less than b, 0 if they are equal, 1 if a is greater than b

        if($a==$b)
            {            echo "== says equal";        }
            else{            echo "== says not equal";     }
        if($a===$b){     echo "=== says equal";        }
            else{            echo "=== says not equal";   }
        echo"<br><br>";

        //30= 11110
        //12= 01100
        //-------------
        //    01100
        echo $a|$f; // Logical OR operator
        echo $a&$f; // Logical AND operator
        echo $c.$g; // Concatenation operator
        echo $a**$f."<br><br>"; // Exponentiation operator

        if ($c&&$g =="AryanAryan") {
            echo "Same ";
        } else {
            echo "Not Same";
        }

        echo $h[2]."<br><br>";
        foreach($h as $i){
            echo $i."<br>";
        } echo "<br>";
        for($i=0; $i<count($h); $i++){
            echo $h[$i]."<br>";
        }
    ?>
</body>     
</html>