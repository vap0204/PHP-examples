<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP</title>
    </head>
    <body>
        <?php
           $names=array(["name"=>"Ivan", "lastN"=>"Popov"],
           ["name"=>"Penka", "lastN"=>"Petrova"]);
           echo "<table border='1'>";
            echo"<tr><th>Name</th><th>Last Name</th></tr>";
            for($i=0;$i<count($names);$i++){
                echo"<tr><td>".$names[$i]["name"]."</td><td>".$names[$i]["lastN"]."</td></tr>";
                
            }
            echo "</table>";
           
        ?>
    </body>
</html>