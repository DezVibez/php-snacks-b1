
<?php
/*SNACK1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$matchs = [
        [
            'Squadra in Casa' => 'Olimpia Milano',
            'Squadra in Trasferta' => 'Cantù',
            'Punti Casa' => '70',
            'Punti Trasferta' => '65'
        ],
        [
            'Squadra in Casa' => 'Virtus Bologna',
            'Squadra in Trasferta' => 'MP Siena',
            'Punti Casa' => '70',
            'Punti Trasferta' => '65'
        ],
        [
            'Squadra in Casa' => 'Dinamo Sassari',
            'Squadra in Trasferta' => 'Reyer Venezia',
            'Punti Casa' => '70',
            'Punti Trasferta' => '65'
        ]
        
        ];
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


        <?php  for($i = 0; $i < count($matchs); $i++)  { ?>

        <div>     
            <?= 
                $matchs[$i]['Squadra in Casa'], '  -  ',  $matchs[$i]['Squadra in Trasferta'], '  |  ',  $matchs[$i]['Punti Casa'], '  -  ', $matchs[$i]['Punti Trasferta']
            ?>    

                
            
        </div>

        <?php }     ?>

    
</body>
</html>