<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exo 6 TP1</title>

    </head>
    
    <style>
        
       table, th, td 
        {
            border: 1px solid black;
        }
    
    
    </style>

    <body>

    <?php
        
       function wordCount ($chaine)
       {
           $nb_mots=1;//Initialisation à 1 pour contrer le fait qu'une phrase se termine par un point collé au mot
           for ($i=0 ; $i<strlen($chaine) ; $i++) //Pourquoi sa refuse d'itérer avec un $i==strlen($chaine) ??
           {
               
               if ($chaine[$i]==" ")
                {
                    $nb_mots+=1;
                }
               
               elseif ($chaine[$i]=="?") //Contrer le fait qu'une phrase interrogative se termine par un " ?"
               {
                   $nb_mots-=1;
               }
               
           }
           return $nb_mots;
           
       }
        
        
        
        function strCount ($chaine,$strtest)
        {
                $nb_strtest=0;

               for ($i=0 ; $i<strlen($chaine) ; $i++) //Se caler sur le bon caractere et ...
               {
                   $testvar="";
                   $n=1; //$n débute à 1 pour comparer avec strlen($strtest) qui commence à 1

                   if ($i+strlen($strtest) >= strlen($chaine))//...iterer jusqu'a ce que la str testée ne puisse plus apparaitre dans la chaine
                   {
                        break;
                   }

                   else
                   {

                       while ($n<=strlen($strtest)) // on prends la variable vide et on la remplie d'autant de caractères qu'il y à dans la strtest sur chaque itération de $i
                           //ex : Hello, llo  ---- Voir Test_strCount.php pour des infos détaillées sur la fonction
                           //- H -- He --- Hel //..   
                       {
                           $testvar=$testvar.$chaine[($i+$n)];
                           $n++;

                           if ($testvar == $strtest)//Si il y a match on incrémente nb_strtest et on arrete d'iterer $n
                                {
                                    $nb_strtest++;
                                    break;
                                }
                       }



                   }
                   
               }
           return $nb_strtest;
       }
        
    
        
        
        
    //Traitement du POST -- affichage du tableau
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST')
        //Test si on à POSTé qq chose
        // str to upper convertit en MAJ les string
    {
        ?>
        <fieldset>
            <legend>INPUT</legend>
            <div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"><!-- action spécifie vers quel page sont renvoyés les informations saisies, 'PHP_SELF' indique notre propre page -->

                        <textarea name="phrase_saisie" placeholder="Entrez du texte..." rows="10" cols="50"></textarea>
                    
                        <br>

                        <select name="choose_funct">   
                            <option value="wordCount">Compter le nombre de mots</option>
                            <option value="charCount">Compter le nombre chaines spécifiées</option>
                        </select>
                            Chaine spécifiée :<input type="text" name="strspec" placeholder="Laisser vide si inutilisé..." >

                        <br>

                        <input type="submit" value="COMPTER">

                </form>
            </div>
        </fieldset>
        
        
        
        <fieldset>
            <legend>OUTPUT</legend>    
        
       <?php 
            
            if ($_POST["choose_funct"]=="wordCount")
            {
                $nb_mots=wordCount ($_POST["phrase_saisie"]);
                echo "Il y a : {$nb_mots} mots dans la phrase saisie !" ;
            }
        
            elseif (($_POST["choose_funct"]=="charCount"))
            {
                $nb_strspec=strCount ($_POST["phrase_saisie"],$_POST["strspec"]);
                echo "Il y a : {$nb_strspec} fois la chaine '{$_POST["strspec"]}' dans la phrase saisie !" ;
            }
            //echo "<br> --- <br>";
            //var_dump($_POST);//ya moyen d'inserer du html via les textarea...
            
        
        ?>
            
        </fieldset>
        
    <?php
    }
    else 
    {
        //Affichage du Formulaire si rien n'a été posté
        ?>
        
        <fieldset>
            <legend>INPUT</legend>
            <div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"><!-- action spécifie vers quel page sont renvoyés les informations saisies, 'PHP_SELF' indique notre propre page -->
                    
                    <textarea name="phrase_saisie" placeholder="Entrez du texte..." rows="10" cols="50"></textarea>
                    
                    <br>
                    
                    <select name="choose_funct">   
                        <option value="wordCount">Compter le nombre de mots</option>
                        <option value="charCount">Compter le nombre chaines spécifiées</option>
                    </select>
                        Chaine spécifiée :<input type="text" name="strspec" placeholder="Laisser vide si inutilisé...">
                    
                    <br>
                    
                    <input type="submit" value="COMPTER">

                </form>
            </div>
         </fieldset>
        
        
        <?php }
        
        include("synthese_1.php");
        
        ?>
        

    </body>

</html>