<?php 
// Classic
echo "<strong>Standard hash method!</strong> <br /><br />";
echo '<br />';
echo '<br />';
$text = "Lorem ipsum";

// https://www.php.net/manual/en/function.hash.php
// https://www.php.net/manual/en/function.hash-algos.php
foreach (hash_algos() as $algo) {
  $text_hashed = hash($algo, $text);
  echo 'Algo : '.$algo.'<br />';
  echo $text_hashed;
  echo '<br />';
}
$classic = hash("sha512", $text);
echo '<br />';
echo '<br />';
echo '<br />';

echo "<strong>Custom hash method!</strong><br />";
echo "<strong>We added the Day like a salt to our text</strong><br />";
echo '<br />';
echo '<br />';
// Add salt 

$date = date("l");  // data custom for each 

$text_to_hash = $date.$text; 
// https://www.php.net/manual/en/function.hash.php
// https://www.php.net/manual/en/function.hash-algos.php
foreach (hash_algos() as $algo) {
  $text_hashed = hash($algo, $text_to_hash);
  echo 'Algo : '.$algo.'<br />';
  echo $text_hashed;
  echo '<br />';
}
$custom = hash("sha512", $text_to_hash);
echo '<br />';
echo '<br />';
echo '<br />';
echo "<strong>With BCRYPT</strong><br />";
echo '<br />';
echo '<br />';

$text_bcrypt = password_hash($text, null); 

echo $text_bcrypt; 

echo '<br />';
echo '<br />';
echo "<strong>Finally :</strong><br />";
echo '<br />';
echo "<p>hash : SHA512 | return : ".$classic."</p>";
echo '<br />';
echo "<p>hash : SHA512 + SALT | return : ".$custom."</p>";
echo '<br />';
echo "<p>password_hash : Defaul algorythm (bcrypt) | return : ".$text_bcrypt."</p>";
echo '<br />';

// $2y$10$itc09EAYF/Xqvt5JbVPj3.y0hkWYqwLisA.kKXlPiluN6o.ukDxli
