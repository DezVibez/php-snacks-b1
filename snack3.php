<?php
/*SNACK3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio: */

$posts_by_date = [

    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'lorem ipsum'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'lorem ipsum'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'lorem ipsum'
        ]
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'lorem ipsum'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'lorem ipsum'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'lorem ipsum'
        ]
    ],
];

$posts_keys = array_keys($posts_by_date);

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
    

    <?php  for($i = 0; $i < count($posts_keys); $i++)  { ?>
        $post = 
        <div>    
            <?= $posts_keys['text'[$i]] ?>    
        </div>
        <div>    
        
        </div>

        
    

    <?php }     ?>
</body>
</html>
