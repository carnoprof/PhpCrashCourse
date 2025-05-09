<html>
<?php
$logged_users = 56;

//questo è un array di array, quindi una matrice.
//il primo array contiene due elementi (che sono array a loro volta) anonimi
//i due sotto-array hanno elementi etichettati, che devono quindi essere richiamati
//usando il nome assegnato
$people = array(
    array('name' => 'Pippo', 'user_id' => 856412),
    array('name' => 'Paperino', 'user_id' => 215863)
);

?>
<body>
Il PHP è normalmente utilizzato per rendere dinamiche piccole parti di una pagina HTML</br>
che quindi viene inframmezzata da tag PHP aperti e chiusi quà e là...</br>
</br>
ad esempio su questa pagina sono collegati <?php echo $logged_users ?> utenti.
</br>
</br>
Questo dropdown contiene elementi "dinamici"</br>
<select>
<?php
    for($i = 0; $i < count($people); ++$i) { //count($people); restituisce la dimensione di $people, quindi 2
        //qui uso il $i per la posizione dei sotto-array all'interno dell'array $people
        //poi uso l'etichetta per accedere al campo nome o user id
        echo "<option value=\"" . $people[$i]['user_id'] . "\">" . $people[$i]['name'] . "</option>";
        //l'html risultate sarà ad esempio:
        //<option value="856412">Pippo</option>
    }
?>
</select>


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
