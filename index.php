<?php
    // assegno il testo ad una variabile
    $text = "Nel mezzo del cammin di nostra vita
    mi ritrovai per una selva oscura,
    ché la diritta via era smarrita.
    
    Ahi quanto a dir qual era è cosa dura
    esta selva selvaggia e aspra e forte
    che nel pensier rinova la paura!
    
    Tant è amara che poco è più morte;
    ma per trattar del ben ch'i' vi trovai,
    dirò de l'altre cose ch'i' v' ho scorte.
    
    Io non so ben ridir com'i' v'intrai,
    tant'era pien di sonno a quel punto
    che la verace via abbandonai.";

    // create a var with the form word
    $word = $_GET["word"];

    // create new text with word replaced by ***
    $replaced_text = str_replace($word, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>