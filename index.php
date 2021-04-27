<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="submit.php" method="post">
<label for="name">Jméno </label>
<input type="text" name="name" id="name">
<br>
<label for="surname">Příjmení </label>
<input type="text" name="surname" id="surname">
<br>
<input type="radio" name="gender" id="male" value="male">
<label for="male">Muž</label>
<br>
<input type="radio" name="gender" id="female" value="female">
<label for="female">Žena</label>
<br>
<input type="radio" name="gender" id="none" value="none">
<label for="none">Nic z uvedených</label>
<br>
<label for="email">E-mail:</label>
<input type="email" name="email" id="email">
<br>
<label for="securityquestion">Kontrolní otázka</label>
<select name="firstquestion" id="firstquestion">
<option value="pet">Jaký byl tvůj první mazlíček?</option>
<option value="nametag">Jaká byla vaše první přezdívka?</option>
</select>
<br>
<label for="securityanswer">Odpověď:</label>
<input type="text" name="securityanswer" id="securityanswer">
<br>
<input type="submit" value="odeslat">
</form>

</body>
</html>