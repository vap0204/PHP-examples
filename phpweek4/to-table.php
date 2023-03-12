<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Week 4</title>
    </head>
    <body>
       <h2>Извеждане на имена</h2>
       <table border="1" cellpadding="3">
        <tr>
            <th>
                Име
            </th>
            <th>
            Фамилия
            </th>
        </tr>
        <?php 
        for($i=0;$i<count($_POST["fName"]);$i++){
            echo"<tr><td>".$_POST["fName"][$i]."</td><td>".$_POST["lName"][$i]."</td><tr>";
        }
        ?>
       </table>
       <a href="javascript:history.back()">Назад</a>
</body>
</html>