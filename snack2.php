
<?php
/*SNACK2
Passare come parametri GET name, 
mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/


$query_name = $_GET['name'] ?? '';
$query_mail = $_GET['mail'] ?? '';
$query_age = $_GET['age'] ?? '';

echo $query_name;
echo $query_mail;
echo $query_age;

if (mb_strlen($query_name) > 3 && is_numeric($query_age) && strpos($query_mail, '@') && strpos($query_mail, '.') ) 
echo 'accesso riuscito';
else 
echo 'accesso negato';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ciao</h1>
</body>
</html>


    

