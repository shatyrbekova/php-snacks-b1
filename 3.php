<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
// Creare un array contenente qualche alunno di un’ipotetica classe.
// Ogni alunno avrà i seguenti dati:
// nome
// cognome
// un array contenente i suoi voti scolastici
// Stampare nome, cognome e la media dei voti di ogni alunno.
    $posts =[

      '27/08/2021' =>[

        ['title'=> 'Post 1', 'author'=> 'Adina Pop', 'text' => 'La vita è breve, vivila come vuoi.'],
        [ 'title'=> 'Post 2', 'author'=> 'Valentina', 'text'=> 'Testo post 2'],
        
      ],
      '26/08/2021'=>[
          ['title'=> 'Post 3', 'author'=> 'Emanuele Gialli', 'text' => 'Testo post 3.'],
          ['title'=> 'Post 4', 'author'=> 'Marapia', 'text' => 'Testo post 4']
      ],
      '25/08/2021'=>[
          ['title'=> 'Post 5', 'author'=> 'Gurdeep Singh', 'text' => 'Testo post 5.'],
          ['title'=> 'Post 6', 'author'=> 'Gianluigi', 'text' => 'Testo post 6.']
      ]

      ];

    
      foreach($posts as $value){
        
          foreach($value as $post){
              print $post['title'];
              print $post['author'];
              print $post['text'];
          }
      };
      var_dump($posts);

    
    ?>
</body>
</html>