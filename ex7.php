<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exo 7 TP1</title>

    </head>
    
    <style>
        
       table, th, td 
        {
            border: 1px solid black;
        }
    
    
    </style>

    <body>

    <?php
           
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
                            <option value="ucfirst">1 er caractere en MAJ</option>
                            <option value="strtoupper">Passer le texte en MAJ</option>
                            <option value="strtolower">Passer le texte en <i>min</i></option>
                            <option value="nl2br">Insèrer un br à chaque nouvelle ligne</option>
                            <option value="sha1">Crypter le texte en sha1</option>
                            <option value="md5">Hasher le texte en md5</option>
                            <option value="ucwords">1 ere lettre de ch&acirc;que mot en maj</option>
                            <option value="convert_uuencode">Encode la chaîne en utilisant l'algorithme uuencode</option>
                            <option value="htmlentities">Convertit tous les caractères éligibles en entités HTML</option>
                            <option value="wordwrap">Effectue la césure d'une chaîne</option>
                        </select>

                        <br>

                        <input type="submit" value="Valider">

                </form>
            </div>
        </fieldset>
        
        
        
        <fieldset>
            <legend>OUTPUT</legend>    
        
       <?php 
            
            echo $_POST["choose_funct"]($_POST["phrase_saisie"]);
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
                            <option value="ucfirst">1 er caractere en MAJ</option>
                            <option value="strtoupper">Passer le texte en MAJ</option>
                            <option value="strtolower">Passer le texte en <i>min</i></option>
                            <option value="nl2br">Insèrer un br à chaque nouvelle ligne</option>
                            <option value="sha1">Crypter le texte en sha1</option>
                            <option value="md5">Hasher le texte en md5</option>
                            <option value="ucword">1 ere lettre de ch&acirc;que mot en maj</option>
                            <option value="convert_uuencode">Encode la chaîne en utilisant l'algorithme uuencode</option>
                            <option value="htmlentities">Convertit tous les caractères éligibles en entités HTML</option>
                            <option value="wordwrap">Effectue la césure d'une chaîne</option>
                        </select>

                        <br>

                        <input type="submit" value="Valider">

                </form>
            </div>
         </fieldset>
        
        
        <?php }
        
        include("synthese_1.php");
        
        ?>
        

    </body>

</html>