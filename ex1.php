<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exo 1 - TP1</title>

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
        
        $nb1=6;
        $nb2=2;
        
        echo "Resultat de {$nb1} + {$nb2} = ".addition($nb1,$nb2).'<br>';
        echo "Resultat de {$nb1} - {$nb2} = ".soustraction($nb1,$nb2).'<br>';
        echo "Resultat de {$nb1} * {$nb2} = ".multiplication($nb1,$nb2).'<br>';
        echo "Resultat de {$nb1} / {$nb2} = ".division($nb1,$nb2).'<br>';
        
        
        
        include("synthese_1.php");
        
        
        
    ?>
        
        
        


    </body>

</html>