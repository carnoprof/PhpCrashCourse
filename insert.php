<html>
<body>

<?php
//qui non esiste ancora la variabile $conn
include 'connect_base.php'; //posso includere altri file PHP, l'effetto è lo stesso di fare copia/incolla del contenuto nell'esatto punto in cui lo includo
//qui la variabile $conn esiste

//posso eseguire query secche, che magari mi sono preparato a mano
$product_name = 'crocs';
$product_price = 25.99;
$sql = "INSERT INTO products (name, price) VALUES ( '$product_name', '$product_price' )"; //attenzione: nome tabella e nomi colonna vanno senza apici, mentre i valori hanno bisogno degli apici

//con la query sql pronta, non mi resta che eseguire e controllare il risultato...
if ($conn->query($sql) === TRUE) {
  echo "</br>New record created successfully";
} else {
  echo "</br>Error: " . $sql . "<br>" . $conn->error;
}
//usare questo metodo per fare le query di inserimento è IL MALE ASSOLUTO. Non dovete usarlo MAI.

//il metodo giusto invece è usare i prepared statements:
// creo la query e metto dei ? dove andranno i parametri
$stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
//collego (bind) i parametri seguendo il loro ordine e specificando: il tipo di dato e la variabile a cui vanno legati.
//tipi di dato:
//s -> stringa
//d -> double
//i -> integer
//b -> blob (testo lungo o file binari)
$stmt->bind_param("sd", $product_name, $product_price);

$stmt->execute();

// a questo punto posso cambiare il valore delle variabili di cui ho fatto il binding ed eseguire di nuovo per inserire una nuova riga con i nuovi valori
$product_name = 'airpods';
$product_price = 250.99;
$stmt->execute();
//questo metodo è safe da sql injection


//è sempre carino chiudere tutto quando abbiamo finito
$stmt->close();
$conn->close();

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
