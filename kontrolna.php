<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kontrolna</title>
    </head>
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
