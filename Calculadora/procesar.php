<html>
<tittle>
</tittle>
<body style="background: #C888F8">
<?php
$Numero1=$_POST['PrimerNumero'];
$Numero2=$_POST['SegundoNumero'];
$Suma=$Numero1+$Numero2;
echo "<div align='center'> SUMA=$Suma </div><br>";
$Resta=$Numero1-$Numero2;
echo "<div align='center'> RESTA=$Resta </div><br>";
$Multiplicacion=$Numero1*$Numero2;
echo "<div align='center'> MULTIPLICACION=$Multiplicacion </div><br>";
$Division=$Numero1/$Numero2;
echo "<div align='center'> DIVISION=$Division </div><br>";
?>
</body>
</html>