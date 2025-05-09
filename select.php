<html>
<body>

<?php
//qui non esiste ancora la variabile $conn
include 'connect_base.php'; //posso includere altri file PHP, l'effetto è lo stesso di fare copia/incolla del contenuto nell'esatto punto in cui lo includo
//qui la variabile $conn esiste

//query di selezione ad ampio spettro
$sql = "SELECT * FROM products";
//eseguo la query e salvo il risultato in un array di array
$result = $conn->query($sql);
echo "</br>";
echo "<select>";
if ($result->num_rows > 0) {//se il risultato della query non è vuoto (potrebbe esserlo)
  while($row = $result->fetch_assoc()) { //fetch_assoc mi rende in output la riga corrente e poi punta alla prossima automaticamente
    //uso i dati della riga corrente per popolare le opzioni della dropdown
    echo "<option value=\"" . $row['id'] . "\">" . $row['name'] . "</option>";
  }
} else { //se invece non ho ottenuto nulla...
  echo "<option value=\"\">No products available</option>";
}
echo "</select>";
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
