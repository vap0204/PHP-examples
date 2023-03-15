<!--Na  Php da se napravi indeksen masiv ot pone 3 el vseki vseki ot el 
na indeksniq masiv sushto predstavlqva masiv ot 3 stoinosti koi to dostupvame s kluchove marka na avto bus reg nomer i liniq po koqto se dviji sled koeto v web straniocata da se vizualizirat v nomeriran spisuk !-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vesela Apostolova_2101681070_Kontrolna</title>
        <style>
            
        </style>
    </header>
    <body>
        <?php
         $array=array(array("brand"=>"Mercedes","number"=>"РВ2322КМ","line"=>"11"),
         array("brand"=>"Honda","number"=>"РВ2323ВР","line"=>"12"),
         array("brand"=>"Chevrolet","number"=>"РВ2322КВ","line"=>"20"));
         echo"<ol>";
         foreach($array as $item){
          echo "<li><u>".$item["brand"]."</u>". " ".$item["number"]." ".$item["line"]."</li>";
        

         }
         echo"</ol>";
        ?>
    </body>
</html>