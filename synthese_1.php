
        <!---------------------------------------------- NAVIGATION POUR SYNTHESE_1 ---------------------------------------------->
        
        
        
        <?php
        
        $exolinks = [ "ex1" => "/TPs/TP_1/ex1.php" , "ex2" => "/TPs/TP_1/ex2.php" , "ex3" => "/TPs/TP_1/ex3.php" , "ex4" => "/TPs/TP_1/ex4.php" , "ex5" => "/TPs/TP_1/ex5.php" , "ex6" => "/TPs/TP_1/ex6.php" , "ex7" => "/TPs/TP_1/ex7.php" ];
        
        
        function exotable($array) // iterer sur la liste en créant un tableau à puces
        {
        
            echo "<table>";
            echo "<ul>";
            
            foreach($array as $key => $val) 
            {
                
                if ($val==$_SERVER['PHP_SELF'])
                {
                    continue; //si on tombe sur notre propre page on l'exclue en sautant l'itération
                }
                
                echo "<li>".'<a href="'.$val.'">'."Lien vers {$key}"."</a></li>";
            }
            
            echo "</ul>";
            echo "</table>";
            
        }
        
        
        function exolist($array)//itérer sur la liste en créant une liste des liens
        {
        
            
            echo '<select name="quel_exo">';
            
            foreach($array as $key => $val) 
            {
                
                if ($val==$_SERVER['PHP_SELF'])
                {
                    continue; //si on tombe sur notre propre page on l'exclue en sautant l'itération
                }
                
                echo "<option value=".'ex'.$key[2].">Aller vers l'exercice $key[2]</option>";
            }
            
            echo "</select>";
            echo '<input type="submit" value="GO">';
           
            
        }
        
        
        if (isset($_POST["quel_exo"]))//test si on à choisi et envoyé une option
        
        {
            header("Location: {$exolinks[$_POST["quel_exo"]]}");
            //renvoi sur le lien construit avec le formulaire
            
        }
        
        else
        {
            ?>

            <fieldset>
                <legend>Navigation</legend> 
                
                    <?php 
                        exotable($exolinks); // creer la navigation en fonction de..
                    ?>
                
                    <div>
                        
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']  ?>">
                            <?php  
                                exolist($exolinks); //  ..l'exercice ou l'on se trouve
                            ?>
                        </form>
                        
                    </div>
                </fieldset>
            
        <?php } ?> <!--fermer le else-->