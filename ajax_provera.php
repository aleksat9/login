<?php
    session_start();
    $baza_podataka=mysqli_connect("localhost", "root", "", "aleksa_cv");
    if(!mysqli_connect_error()) {
        $email=$_POST['email'];
        $lozinka=$_POST['lozinka'];
        $upit="SELECT email,lozinka FROM korisnici";
        $odg_baze=mysqli_query($baza_podataka, $upit);
        $provera=true;
        if($odg_baze) {
            while($red=mysqli_fetch_array($odg_baze,MYSQLI_ASSOC)) {
                if($red['email']==$email and $red['lozinka']==$lozinka) {
                    $_SESSION['email']=$email;
                    $_SESSION['lozinka']=$lozinka;
                    header("Location: stranica.php");
                } else {
                    $provera=false;
                }
            }
            if(!$provera) {
                echo "Korisnik ne postoji u bazi podataka.";
            }
        } else {
            echo "Greska u konekciji sa bazom podataka.<br>Broj greske: ".mysqli_connect_errno($baza_podataka);
        }
    } else {    
        echo "Greska u konekciji sa bazom podataka.<br>Broj greske: ".mysqli_connect_errno($baza_podataka);
    }
?>