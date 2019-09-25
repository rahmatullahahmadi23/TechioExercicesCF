<?php
    include 'question.php';
    function test() {
        if ($nombre_de_lignes() ===  10 ) {
            echo("TECHIO> success true \r\n");
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>