<html>
<body>
<?php
  include 'connect_base.php'; //questa mi servirà in ogni caso
?>

<!-- se è stato definito il valore per il bottone submit, allora non è la prima volta che visualizzo la pagina
e ci sono dei valori nel POST che l'utente mi ha passato -->
<?php if(isset($_POST['SubmitButton'])):
?>
<?php
//recupero i dati che arrivano dall'utente
$product_id = $_POST['product'];
$product_qty = $_POST['qty'];

//se il product id non è nullo procedo all'inserimento dell'ordine
if($product_id) {
  $stmt = $conn->prepare("INSERT INTO orders (product_id, qty) VALUES (?, ?)");
  $stmt->bind_param("ii", $product_id, $product_qty);
  $stmt->execute();

  $stmt->close();
  $conn->close();
  echo "</br></br></br>
        Ordine effettuato correttamente
        </br>";
}
else {
  echo "</br></br></br>
        Nessun prodotto selezionato
        </br>";
}

unset($_POST); //faccio unset della variabile POST per permettere di ricaricare il form quando l'utente clicca "New order"
?>

<a href="adding_data.php">New order</a>

<!-- se invece non è stato definito nessun valore per il bottone submit, allora è la prima volta che visualizzo la pagina
e devo preparare un form per l'utente -->
<?php else: ?>

<h1> Aggiungi prodotti al carrello</h1>
</br>
</br>
<form id="ordine" method="post" action="#">
  Prodotto:
  <?php
    //query di selezione ad ampio spettro
    $sql = "SELECT * FROM products";
    //eseguo la query e salvo il risultato in un array di array
    $result = $conn->query($sql);
    echo "<select name=\"product\">";
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
  Quantità:
  <input type="text" name="qty" value="">
  </br>
    <input type="submit" name="SubmitButton" />
</form>

<?php endif; ?>

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
