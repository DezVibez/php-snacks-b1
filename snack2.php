
<?php
/*SNACK2
Passare come parametri GET name, 
mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”;*/


$take_query_name = $_GET['name'];
$take_query_mail = $_GET['mail'];
$take_query_age = $_GET['age'];

echo $take_query_name;
echo $take_query_mail;
echo $take_query_age;

?>

