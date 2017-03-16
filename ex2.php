<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exo 2 - TP1</title>

    </head>

    <body>

    <?php
        
        function addition($a,$b)
        {
            return($a+$b);
        }
        
        function soustraction($a,$b)
        {
            return($a-$b);
        }
        
        function multiplication($a,$b)
        {
            return($a*$b);
        }
        
        function division($a,$b)
        {
            return($a/$b);
        }
        
        
        function operation_V1($val1,$val2,$op)
        {
            switch($op)
            {
                case "addition":
                    return(addition($val1,$val2));
                    
                case "soustraction":
                    return(soustraction($val1,$val2));
                    
                case "multiplication":
                    return(multiplication($val1,$val2));
                    
                case "division":
                    return(division($val1,$val2));
            }
        }
        
        $val1=6;
        $val2=2;
        
        
        echo "Operation_V1 : avec val1 = {$val1} et val2 = {$val2} <br>";
        echo operation_V1($val1,$val2,"addition")."<br>";
        echo operation_V1($val1,$val2,"soustraction")."<br>";
        echo operation_V1($val1,$val2,"multiplication")."<br>";
        echo operation_V1($val1,$val2,"division")."<br>";
        
        
        
        
        
        function operation_V2($val1,$val2,$op)
        {
            return($op($val1,$val2));
        }
        
        
        echo "<hr>";
        echo "Operation_V2 : avec val1 = {$val1} et val2 = {$val2} <br>";
        echo operation_V2($val1,$val2,"addition")."<br>";
        echo operation_V2($val1,$val2,"soustraction")."<br>";
        echo operation_V2($val1,$val2,"multiplication")."<br>";
        echo operation_V2($val1,$val2,"division")."<br>";
        
        
        
        
        
        include("synthese_1.php");
    ?>
        
        

    </body>

</html>