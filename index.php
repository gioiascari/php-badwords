<?php

    // Creare una variabile con un paragrafo di testo a vostra scelta.
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit est dicta mollitia earum.";

    // Una parola da censurare viene passata dall'utente tramite parametro GET.
    $prova = $_GET ["ipsum"];
    
    $hideText = str_replace( $prova, "***", $text );
  

?>
    <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
    <h1> <?php echo  ($text)  ?> </h1>
    <h1> <?php echo strlen ($text)  ?> </h1>
    <!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
    <h1> <?php echo  ($hideText)  ?> </h1>
    