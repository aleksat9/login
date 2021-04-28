<?php
    session_start();
    if(isset($_SESSION['email']) and isset($_SESSION['lozinka'])) {
        echo "Podaci koji su sacuvani u sesiji su:<br>Email: ".$_SESSION['email']."<br>Lozinka: ".$_SESSION['lozinka'];
        session_unset();
        session_destroy();
    } else {
        echo "Korisnik nije ulogovan.";
    }
?>