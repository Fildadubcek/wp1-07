<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Vyplněné údaje</h1>
 <?php
 $name = filter_input(INPUT_POST, 'name');
 $surname = filter_input(INPUT_POST, 'surname');
 $gender = filter_input(INPUT_POST, 'gender');
 $email = filter_input(INPUT_POST, 'email');
 $securityanswer = filter_input(INPUT_POST, 'securityanswer');
  echo "Vaše jméno je $name <br>";
  echo "Vaše příjmení je $surname <br>";
  echo "Vaše pohlaví je $gender <br>";
  echo "Váš email je $email<br>";
  echo "Vaše kontrolní odpoveď je $securityanswer";
  ?>

 
</body>
</html>