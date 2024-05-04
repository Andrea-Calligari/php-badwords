<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<div class="container">
    <form action="./server.php" method="POST">
        <div class="row">
            <label for="message">Inserisci il tuo messaggio :</label>
            <p class="col-6">
                <textarea name="message" id="message" placeholder="Scrivi qui il tuo messaggio "></textarea>
            </p>
            <label for="word">Inserisci la parola da cenusrare :</label>
            <p class="col-6">
                <input type="text" name="word" placeholder="Inserisci la parola   ">
                <input type="submit" value="Invia">
            </p>
        </div>
    </form>

</div>
 
    
</body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        width: 1024px;
        margin: 0 auto;
        padding:12px 0;

    }
    .row{
        display:flex;
        flex-direction: column;
    }
    .row *{
        margin-bottom:12px;
    }
    
    .col-6{
        width: calc(6 * 100 / 12);
        
    }
</style>