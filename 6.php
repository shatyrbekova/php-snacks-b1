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

//  Utilizzare questo array di partenza e
// stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un
// rettangolo verde.

 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
  ];

  
 ?>
 <div style="background-color: #808080">
   <?php
     for($x=0; $x<count($db['teachers']); $x++){
         echo $db['teachers'][$x]['name'];
         echo " {$db['teachers'][$x]['lastname']}<br/>";
     }
   ?>
 </div>

 <div style="background-color: #008000">
 <?php
     for($i=0; $i<count($db['pm']); $i++){
         echo "<font color='white'> {$db['pm'][$i]['name']} </font>";
         echo " <font color='white'>{$db['pm'][$i]['lastname']}<br/> </font>";
     }
   ?>
 
 </div>

</body>
</html>