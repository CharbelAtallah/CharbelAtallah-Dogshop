<?php
/**
 * Att arbeta mot befintliga servrar
 * ---------------------------------
 * Visa en HTML-lista över användare
 */

// 1. Ange en endpoint/resurs
$url = "http://localhost/test/webshop/api1.json";

// 2. Hämta data i JSON-format (en sträng)
$json = file_get_contents($url);

// Testa att skriva ut strängen (temporärt)
 echo $json;

// 3. Konvertera JSON till en PHP-Array
// Takes a JSON encoded string and converts it into a PHP variable.
// https://www.php.net/manual/en/function.json-decode
$array = json_decode($json, true);

// Testa att skriva ut arrayen (temporärt)
 echo "<pre>";
 print_r($array);
 echo "</pre>";

// 4. Välj data från arrayen
echo "<ol>";
foreach ($array as $key => $value) {
     echo "Key: " . $key; // 0123456789
     echo '<hr>';
     echo "Value: ";
     print_r($value); // OBS! $value är arrayer
     echo '<hr>';
     echo "<li>" . $value["name"].["price"]. "</li>";
}
echo "</ol>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>