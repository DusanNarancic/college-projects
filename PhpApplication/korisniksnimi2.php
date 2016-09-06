<?php
        
		session_start();  
	   // citanje vrednosti iz sesije - da bismo uvek proverili da li je to prijavljeni korisnik
	   $idkorisnika=$_SESSION["idkorisnika"];
	   
	   // preuzimanje vrednosti sa forme
	 	   // preuzimanje vrednosti sa forme
	   $brojracuna=$_POST['brojRacuna'];
	   $jmbg=$_POST['jmbg'];
	   //$nazivfirme=$_POST['naziv'];
	   $imekorisnika=$_POST['imeKorisnika'];
	   $prezimekorisnika=$_POST['prezimeKorisnika'];
	   $brojtelefona=$_POST['brojTelefona'];
	   $korisnickoime=$_POST['korisnickoIme'];
	   $lozinka=$_POST['lozinka'];
	   $adresakorisnika=$_POST['adresa'];
	   $vrstakorisnika=$_POST['vrstaKorisnika'];
	   $predstavnikfirme=$_POST['predstavnikFirme'];
	 //  $nazivfirme=$_POST['naziv'];
  
	  
	    
	   
       require 'delovi/kod_parametrikonekcije.php';

       $db_handle = mysql_connect($server, $user_name, $password);

       if (!$db_handle) {
                die('Nije uspostavljena veza sa serverom baze podataka. Greška: ' . mysql_error());
                echo "<br/>";
                }
                    else
                    {
                    //echo " Uspesno uspostavljena konekcija ka serveru!";
                    //echo "<br/>";
                    }

       //KONEKCIJA KA BAZI PODATAKA
       $db_selected = mysql_select_db($bazapodataka, $db_handle);
       if (!$db_selected) {
                die ('Nije moguce koristiti bazu podataka. Greška: ' . mysql_error());
                echo "<br/>";
                        }
                        else
                        {
                         //echo " Uspesna konekcija ka bazi podataka! ";
                         //echo "<br/>";
                        }

// *********************************************** PROVERA DA LI VEC POSTOJI korisnicko ime I SNIMANJE AKO NE POSTOJI
       if ($db_selected)
           {
	    // dodatak da moze da radi sa UTF8
	    mysql_query('SET NAMES "utf8"',$db_handle);
            
			// PROVERAVAMO DA LI JE PRIJAVLJENI KORISNIK IZ NASE BAZE PODATAKA, PA AKO JESTE, PUSTAMO DA IZVRSI INSERT INTO
            $SQLkorisnik = "SELECT * FROM `".$bazapodataka."`.`KorisnikUsluge` WHERE IdKorisnika=".$idkorisnika;
            $resultkorisnik = mysql_query($SQLkorisnik);
            $num_rowskorisnik = mysql_num_rows($resultkorisnik);
            if ($num_rowskorisnik>0) {
							$SQL = "INSERT INTO `".$bazapodataka."`.`KorisnikUsluge` (BrojRacunaKorisnika,ImeKorisnika,PrezimeKorisnika,BrojTelefonaKorisnika,KorisnickoIme,Lozinka,AdresaKorisnika,VrstaKorisnika,jePredstavnikFirme,JMBG) VALUES ($brojracuna,'$imekorisnika','$prezimekorisnika',$brojtelefona,'$korisnickoime','$lozinka','$adresakorisnika','$vrstakorisnika',$predstavnikfirme,$jmbg)";
            				$retval = mysql_query( $SQL, $db_handle );
							$greska= mysql_error();
        			           }
				} // od if db selected

      mysql_close($db_handle);
	
	// prikaz uspeha aktivnosti	
	echo "Ukupno procesirano $retval zapisa";
	echo "Greska $greska";	 
		
	  
      ?>
