<html>
<body>
<?php

//i commenti in PHP sono come in C

/* quindi esistono anche quelli
 * multiriga che si usano esattamente
 * allo stesso modo del C
 */

# ma se vuoi anche questo è un modo per commentare in singola riga, because why not...


//le variabili non sono tipizzate, quindi
$x = 27;
$y = "Pluto";
//si dichiarano tutte allo stesso modo...

echo "Variabile intera: ";
echo $x;
echo "</br>";
echo "Variabile stringa: ";
echo $y;
echo "</br>";
echo "Variabile inesistente: ";
echo $pippo;
echo "</br>";
//anche se uso variabili che non esistono, nessuno si lamenta...

echo "</br>";
echo "</br>";
$b = 15;
echo "Somma tra interi: ";
echo $x + $b;
echo "</br>";
echo "\"Somma\" tra stringhe: "; //notare l'escape per i doppi apici
echo $y . $b . "altro testo";
echo "</br>";

?>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
<a href="index.html">back to index</a>
</body>
</html>
