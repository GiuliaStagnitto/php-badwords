<!-- Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
  $badword= $_GET['badword'];
  $goodword = "***";

  $str= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  $length= strlen($str);

  $goodStr = str_replace($badword, $goodword, $str);

  echo $length;
  echo "<br>";
  echo $goodStr;

 ?>

 <!-- Controllare che la mail passata in GET
sia ben formata e contenga un punto e
una chiocciola. Se è corretta stampare un
div che contenga "OK", altrimenti che
contenga "KO". -->

<?php
  $mail = $_GET['mail'];

  echo $mail;
  echo '<br>';

  $idDotPresent = strpos($mail, '.');
  $idAtPresent = strpos($mail, '@');

  if ($idDotPresent !== false && $idAtPresent !== false) {
    echo 'ok';
  } else {
    echo 'ko';
  }
  // o questo
  // $isValidMail = $idDotPresent !== false && $idAtPresent !== false;

?>
/*
<div>
  <?php
  if ($isValidMail) {
    echo 'ok';
  } else {
    echo 'ko';
  }
  ?>
</div>
*/

<!-- Inserire tante parole all'interno di un
array e controllare che la parola passata
dall'utente ci sia nell'array. -->

<?php
  $word = $_GET['word'];
  $array = ['ciao', 'come', 'stai', 'oggi', 'domani', 'toyota', 'Mirco'];

  if (in_array($word, $array)) {
    echo "la parola è contenuta nell'array";
  } else {
    echo "la parola non c'è";
  }
?>
