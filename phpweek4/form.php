<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Week 4</title>
    </head>
    <body>
        <h1>Въвеждане на имена</h1>
        <form action="to-table.php" method="post">
            <div id="add">
                <label>Име</label>
                <input type="text" name="fName[]"required >
                <label>Фамилия</label>
                <input type="text"name="lName[]" required>
            </div>
            <div id="add">
                <label>Име</label>
                <input type="text" name="fName[]"required >
                <label>Фамилия</label>
                <input type="text"name="lName[]" required>
            </div>
              <input type="submit" value="Submit">
           
        </form>
       
</body>
</html>