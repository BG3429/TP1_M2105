<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exo 3 - TP1</title>

    </head>
    
    <style>
        
       table, th, td 
        {
            border: 1px solid black;
        }
        
        .colred
        {
            color: red;
        }
    
    
    </style>

    <body>

    <?php
        
        function createHTMLTable() //les 2 valeures buttoires récup par un get...
     
     /// Ex: de syntaxe :       ex3.php?lin=5&col=5
       {

            
           $nbL=0; //création d'un incrément pour laisser inchangé les val. buttoires
           $flipline=TRUE; //création d'une bool afin de faire 1 Ligne /2 en <b></b>
               
           echo"<table>";
               
           for ($nbL=0 ; $nbL<=$_GET["lin"]-1 ; $nbL++)
           {
               
               $nbC=0;  
               
                echo '<tr>';
               
                   if ($flipline==TRUE)
                   {
                       
                       
                       for ($nbC=0 ; $nbC<=$_GET["col"]-1 ; $nbC++)
                       {
                           if ($nbC%2==0)//tester si le nombre est pair
                           {
                               echo "<td class=colred>{$nbL} - {$nbC}</td>";
                           }
                           else
                           {
                               echo "<td>{$nbL} - {$nbC}</td>";
                           }
                         
                       }
                       
                       $flipline=FALSE;
                   }
                   
                   else
                   {
                       
                      
                       
                       for ($nbC=0 ; $nbC<=$_GET["col"]-1 ; $nbC++)
                       {
                           
                           if ($nbC%2==0)//tester si le nombre est pair
                           {
                               echo "<td class=colred> <b> {$nbL} - {$nbC} </b> </td>";
                           }
                           else
                           {
                               echo "<td> <b> {$nbL} - {$nbC} </b> </td>";
                           }
                           
                       
                       }
                       
                       $flipline=TRUE;
                   }
                   
               echo "</tr>";
               
               }
           
           echo"</table>";
    
        }
    
        
        createHTMLTable();
            
            
            include("synthese_1.php");
        ?>
        
        

    </body>

</html>