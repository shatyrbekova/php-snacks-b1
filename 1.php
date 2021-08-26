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
       $partite = [
           [
               "casa"=> "Olimpia",
               "ospite"=> "Cantù",
               "casa-punti" => 55,
               "ospitePunti"=> 60
           ],

           [
            "casa"=> "Virtus Roma",
            "ospite"=> "Virtus Bologna",
            "casa-punti" => 40,
            "ospitePunti"=> 30
           ],
           [
            "casa"=> "F.C Matera",
            "ospite"=> "Inter",
            "casa-punti" => 55,
            "ospitePunti"=> 1
           ]
        ];

        for($i=0; $i< count($partite); $i++){
         echo ="{$partite[$i][casa]} -{$partite[$i]['ospiti']} | {$partite[$i]['casa-punti']} - {$partite[$i]['ospitePunti']} <br/>" ;
     };
    ?>
</body>
</html>