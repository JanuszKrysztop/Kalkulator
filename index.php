<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <title>Kalkulator</title>
    </head>
    <body>
<?php
if(isset($_POST['submit'])){
    $K = ($_POST['kwota']);  
    $n = ($_POST['rat']);    
    $OPR = ($_POST['roczne']);
    $OPM = $OPR/12;          
    $q = 1+($OPR/12);
    $rata1 = $K * (($q)*($n*$n)) * (($q-1)/((($q)*(($n*$n))-1)));
    $rata2 = ($K * $OPM)/(1-(1/(1-$OPM)*($n*$n)));
    $odsetki = $n*$rata1;
    $miesieczne_odsetki = $odsetki/ $n;
    $kapital = $odsetki - $K;

echo    '<br>Kwota kredytu: '.$K.
        '<br>Liczba rat: '.$n.
        '<br>Oprocentowanie roczne: '.$OPR.
        '<br>Oprocentowanie miesięczne: ' .$OPM.
        '<br>Kwota miesięcznej raty: '.$rata1.
        '<br>Kwota kapitału do spłaty: '.$kapital.
        '<br>Kwota odsetek do splaty: '.$odsetki.'<br>';
}
?>
<body>
    <div id="panel">
    <form method="post">
        <p>Kwota kredytu: </p>
        <input type="number" name="kwota" id="kwota" value="">  <br>
        <p>Ilość rat: </P>
        <input type="number" name="rat" id="rat" value="1"> <br>
        <p>Oprocentowanie roczne: </P>
        <input type="number" name="roczne" id="roczne" value="1" step="0.1" > <hr>
        <input type="submit" name="submit" value="Oblicz">       
        </form>
    </div>
</body>