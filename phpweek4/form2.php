<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
    </head>
    <body>
        <?php
        $student=array(["name"=>"Ivan", "lastMn"=>"Petrov", "fn"=>"023432", "spec"=>"Informatika"], ["name"=>"Petya", "lastNm"=>"Ivanpva", "fn"=>"3232432","spec"=>"STD"]);
        echo  "<table border='1'>";
        for($i=0;$i<count($student);$i++){
            echo "<tr>";
        foreach($student[$i]as $val){
            echo"<td>$val</td>";
            echo"</tr>";
        }
        echo "</table>";
        }
        ?>
    </body>
</html>