<?php
$message = $_POST['message'];
$word = $_POST['word'];
$new_message = str_replace($word, '***', $message) 


$word_count = substr_count($new_message, '***');
// oppure 
// $new_message = str_replace($word, '***', $message, $count) ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1> Messaggio : <p><?php echo $message;?></p></h1>
    <h1> Lunghezza del messaggio : <?php echo strlen($message);?></h1>
    <h1> Paragrafo censurato :<p><?php echo $new_message;?></p></h1>
    <h1> Lunghezza del nuovo paragrafo censurato :<?php echo strlen($new_message);?></h1>
    <!-- oppure  -->
    <!-- <h1> Numero di volte che la parola viene censurata :<?php echo $word_count; ?></h1> -->
    <h1></h1>
</body>
</html>