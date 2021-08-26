<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Prendere un testo abbastanza lungo, contenente diverse frasi.
Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un
nuovo paragrafo. -->
<?php

$phrase = "Loro non sanno di che parlo.
Voi siete sporchi, fra', di fango.
Giallo di siga fra le dita.
Io con la siga camminando.
Scusami, ma ci credo tanto.
Che posso fare questo salto.
E anche se la strada è in salita.
Per questo ora mi sto allenando.
E buonasera, signore e signori, fuori gli attori.
Vi conviene toccarvi i coglioni.
Vi conviene stare zitti e buoni.
Qui la gente è strana, tipo spacciatori.
Troppe notti stavo chiuso fuori.
Mo' li prendo a calci 'sti portoni.
Sguardo in alto tipo scalatori.
Quindi scusa mamma se sto sempre fuori, ma.
Sono fuori di testa, ma diverso da loro.
E tu sei fuori di testa, ma diversa da loro.
Siamo fuori di testa, ma diversi da loro.
Siamo fuori di testa, ma diversi da loro";
 echo $phrase;

$splitSentences = explode('.', $phrase);

 for($x=0; $x<count($splitSentences); $x++){
     echo "<p> {$splitSentences[$x]} </p>";
 }
  
?>
</body>
</html>