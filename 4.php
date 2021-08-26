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
             21,
             22
        ]],
        ['name'=>'Mimmo', 'lastname'=>'Bianchi', 'marks'=>[
            25,
            26
        ]],
        ];
        
//    for($x=0; $x<count($students); $x++){
//             echo array_sum($students[$x]['marks'] / count($students[x]['marks']));
//         };
        
       
     
        foreach($students as $student){
            echo "{$student['name']} "; 
            echo "{$student['lastname']}<br>";
            // echo  $student['marks'];
            // $sum ='';
            // $count=0;
            // foreach($students as $value){
            //     $sum +=$value['marks'];
            //     $count++;
            // }
            // echo $sum/$count;
            
        }
    ?>

</body>
</html>