<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculater</title>
</head>
<body>
    <form method="post">
    <table>
    <tr>
    <th><label>First No:</label></th>
    <td><input type="number" name="number1" ></td>
   </tr>
    <br>
    <tr>
   <th> <label>Second No:</label></th>
    <td><input type="number" name="number2"></td>
</tr>
    <tr>
    <td><select name="operator">  
  <option value="None">None</option>
  <option value="addition">Addition</option>  
  <option value="Substraction">Substraction</option>  
  <option value="multiplication">Multiplication</option>  
  <option value="division">Divison</option>  
    
</select> </td> 
    </tr>
    <br><br>
    <tr>
   <td> <input type="submit" name="submit"></td>
</tr>
</table>
    </form>
</body>
</html>