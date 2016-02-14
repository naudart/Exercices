<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cnjugaison</title>
</head>
<body>
   <h2>Conjugaison</h2>
    <form action="action.php" method="post">
        <table border="1x">
           <tr>
               <td colspan="2">Veuillez saisir les informations :</td>
           </tr>
            <tr>
                <td>Verbe : </td>
                <td><input type="text" name="verbe"></td>
            </tr>
            <tr>
                <td>Groupe :</td>
                <td>
                <input type="radio" name="groupe" value="1"> 1er groupe <br>
                <input type="radio" name="groupe" value="2"> 2eme groupe <br>
                <input type="radio" name="groupe" value="3">3eme groupe <br>
                </td>
            </tr>
            <tr>
                <td>Temps</td>
                <td><select name="temps">
                    <option value="imparfait">Imparfait</option>
                    <option value="present">Present</option>
                    <option value="furur">Futur</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="reset"></td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>