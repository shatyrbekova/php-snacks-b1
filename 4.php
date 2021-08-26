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

    $students=[
        ['name'=>'Pippo', 'lastname'=>'Gialli', 'marks'=>[
            'algebra'=> 21,
            'inglese'=>22
        ]],
        ['name'=>'Mimmo', 'lastname'=>'Bianchi', 'marks'=>[
            'algebra'=> 25,
            'inglese'=>26
        ]],
        ];
        
        
         

        foreach($students as $student){
            echo "{$student['name']}<br>"; 
            echo $student['lastname'];
            echo (array_sum($students[] / count($students);
            
        }
    ?>

</body>
</html>