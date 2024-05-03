<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="./server.php" method="POST">
             <textarea name="message" id="message" placeholder="Scrivi qui il tuo messaggio "></textarea>
             <input type="text" name="word" placeholder="Inserisci la parola da censurare ">
             <input type="submit" value="Invia">
            </form>
        </div>
    </div>
</div>
    
</body>
</html>

<style>
    .container{
        margin: 0 auto;
        width: 950px;

    }
    
    .col-6{
        width: calc(6 * 100 / 12);
        
    }
</style>