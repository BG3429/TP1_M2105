<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exo 5 - TP1</title>

    </head>

    <body>

    <?php
        
        function fact ($nbr)
        {
            if ($nbr==0 or $nbr==1)
            {
                return(1);
            }
            
            else
            {
                $cmp=1; //le compteur d'itérations
                $rslt=1; //initialiser la variable qui prend le résultat
                
                while ($cmp<=$nbr)
                {
                    $rslt=$cmp*$rslt;
                    $cmp++;
                }
                
                return($rslt);
                
            }
            
        }
        
        
        function factR ($nbr)
        {
            if ($nbr==0)
            {
                return(1);
            }
            
            else
            {
                return($nbr*factR($nbr-1));
            }
            
        }
        
        //Traitement du POST -- affichage du Résultat
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST')// str to upper convertit en MAJ les string
    {
        ?>
        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"><!-- action spécifie vers quel page sont renvoyés les informations saisies -->

                    <label for="nombre">Entrez un nombre </label>
                        <input type="text" name="nombre" id="nombre">

                    <br>

                    <label for="funct">Entrez le nom de la fonction : [fact / factR] </label>
                        <input type="funct" name="funct" id="funct">

                    <br>

                    <input type="submit" value="Creer le tableau">

            </form>
        </div>
        
        <?php
        
        echo ("<br>".$_POST["funct"]."({$_POST["nombre"]}) = ".$_POST["funct"]($_POST["nombre"]));
        
        echo "<hr> nice";
    }
    else 
    {
        //Affichage du Formulaire si rien n'a été posté
        ?>
        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"><!-- action spécifie vers quel page sont renvoyés les informations saisies -->

                    <label for="nombre">Entrez un nombre </label>
                        <input type="text" name="nombre" id="nombre">

                    <br>

                    <label for="funct">Entrez le nom de la fonction : [fact / factR] </label>
                        <input type="funct" name="funct" id="funct">

                    <br>

                    <input type="submit" value="Lancer le calcul">

            </form>
        </div>
        
        
        <?php }
        
        include("synthese_1.php");
        
        
        ?>


    </body>

</html>