<?php
$message = $_POST['message'];
$word = $_POST['word'];
$message_length = strlen($message);
$new_message = str_replace($word, '***', $message);
$new_message_length = strlen($new_message);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>Questo é il tuo messaggio : <p><?php echo $message;?></p></h1>
    <h1>Questa é la lunghezza del messaggio : <?php echo $message_length;?></h1>
    <h1>Qui trovi il paragrafo censurato :<p><?php echo $new_message;?></p></h1>
    <h1>Questa é la lungheza del nuovo paragrafo censurato :<?php echo $new_message_length;?></h1>

    
</body>
</html>