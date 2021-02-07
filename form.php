<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Form libri</title>
</head>
<body>

    <form class="" action="index.php" method="post">
        <input type="text" name="title" placeholder="Inserisci il titolo" required>
        <input type="text" name="subtitle" placeholder="Inserisci il sottotitolo (opzionale)">
        <input type="text" name="author" placeholder="Inserisci l'autore" required>
        <input type="number" name="firstEd" placeholder="Prima edizione" required>
        <input type="text" name="cover" placeholder="inserisci il percorso della copertina" required>
        <textarea  name="preview" placeholder="Inserisci la trama (max 500 caratteri)" maxlength="500" required rows="8" cols="80"></textarea>
        <button type="submit" name="button">Add</button>
    </form>

</body>
</html>
