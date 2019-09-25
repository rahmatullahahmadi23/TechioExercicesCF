<?php
    include 'exer1.php';
    function test() {
        if ($lignes() ===  10 ) {
            echo("TECHIO> success true \r\n");
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
   
?>
