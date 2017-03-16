<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exo 4 - TP1</title>

    </head>
    
    <style>
        
       table, th, td 
        {
            border: 1px solid black;
        }
    
    
    </style>

    <body>

    <?php
        
       function createHTMLTable($lin=1,$col=1) //les 2 valeures buttoires
       {
           $nbL=0; //création d'un incrément pour laisser inchangé les val. buttoires
           
           $lin-=1;
           $col-=1;
               
           echo"<table>";
               
           for ($nbL=0;$nbL<=$lin;$nbL++)
           {
               echo "<tr>";
               
               $nbC=0;
               
               for ($nbC=0;$nbC<=$col;$nbC++)
               {
                   echo "<td>{$nbL} - {$nbC}</td>";
               }
               
               echo "</tr>";
           }
           
           echo"</table>";
           
       }
        
    
    //Traitement du POST -- affichage du tableau
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST')// str to upper convertit en MAJ les string
    {
        ?>
        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"><!-- action spécifie vers quel page sont renvoyés les informations saisies -->

                    <label for="lignes">Nombre de Lignes : </label>
                        <input type="text" name="lignes" id="lignes">

                    <br>

                    <label for="colones">Nombre de Colones </label>
                        <input type="text" name="colones" id="colones">

                    <br>

                    <input type="submit" value="Creer le tableau">

            </form>
        </div>
        
        <?php
        
        createHTMLTable($_POST["lignes"],$_POST["colones"]);
        
        echo "<hr> nice";
    }
    else 
    {
        //Affichage du Formulaire si rien n'a été posté
        ?>
        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"><!-- action spécifie vers quel page sont renvoyés les informations saisies -->

                    <label for="lignes">Nombre de Lignes : </label>
                        <input type="text" name="lignes" id="lignes">

                    <br>

                    <label for="colones">Nombre de Colones </label>
                        <input type="text" name="colones" id="colones">

                    <br>

                    <input type="submit" value="Creer le tableau">

            </form>
        </div>
        
        
        <?php }
        
        
        include("synthese_1.php");
        
        ?>
        
        

    </body>

</html>