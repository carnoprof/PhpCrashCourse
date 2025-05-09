<html>
<body>
Il teorema di Böhm-Jacopini, enunciato nel 1966[1] dagli informatici Corrado Böhm e Giuseppe Jacopini, è un teorema di informatica teorica il quale afferma che qualunque algoritmo può essere implementato in fase di programmazione (in diagramma di flusso, pseudocodice o codice sorgente) utilizzando tre sole strutture dette strutture di controllo: la sequenza, la selezione (o struttura condizionale) e l'iterazione (o ciclo), da applicare in modo gerarchico alla composizione di istruzioni elementari (per esempio, istruzioni eseguibili con il modello di base della macchina di Turing).
</br>
</br>
</br>
</br>
<?php
  $x = 0;
  //la if funziona come in linguaggio C
  if($x < 0) {
    echo "</br>X è un numero negativo";
  }
  else {
    echo "</br>X non è un numero negativo";
  }

  if($x > 10) {
    echo "</br>X è maggiore di 10";
  }
  else {
    echo "</br>X non è maggiore di 10";
  }

  if($x) {
    echo "</br>X valuta vero";
  }
  else {
    echo "</br>X valuta falso";
  }
?>

</br>
</br>
Quanto vale x?

</br>
</br>
</br>
</br>
</br>
</br>
<?php
$numeri = array(
  1 => 'un',
  2 => 'due',
  3 => 'tre',
  4 => 'quattro',
  5 => 'cinque', //la virgola nell'ultimo elemento è opzionale...
);
//mal di testa aggiuntivo sugli array: https://www.php.net/manual/en/language.types.array.php


//anche il for funziona come nel linguaggio C
for($i = 1; $i < 6; $i++) {
  if($i == 1) {
    echo $numeri[$i] . " elefante si dondolava sopra il filo di una ragnatela e trovando la cosa interessante andò a chiamare un altro elefante</br>";
  }
  else {
    echo $numeri[$i] . " elefanti si dondolavano sopra il filo di una ragnatela e trovando la cosa interessante andarono a chiamare un altro elefante</br>";
  }
}


//ovviamente esiste anche il while, e anche lui, funziona come nel linguaggio C
//https://www.php.net/manual/en/control-structures.while.php

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
