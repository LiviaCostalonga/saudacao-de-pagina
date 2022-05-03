<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    function mostrarSaudacao($DateAndTime){
    if(  $DateAndTime >= 0 || $DateAndTime < 12 ) {
    echo "<b><font color='#FF0000'> BOM DIA </font></b>"; 
    } elseif ( $DateAndTime >= 12 || $DateAndTime < 18){
        echo "<b><font color='#00FF00'> BOA TARDE </font></b>"; 
    } elseif ( $DateAndTime >= 18 || $DateAndTime < 24){
        echo "<b><font color='#0000FF'> BOA NOITE </font></b> ";
    }
    }
    ?>
</head>
<body>
<?php
$Object = new DateTime();  
$Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
$DateAndTime = $Object->format(" h:i:s a");  
?>

<?php
$saudacao = mostrarSaudacao($DateAndTime); 
?>
</body>
</html>