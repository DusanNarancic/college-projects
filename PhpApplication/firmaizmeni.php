 <?php
        
		session_start();  
	   // citanje vrednosti iz sesije - da bismo uvek proverili da li je to prijavljeni korisnik
	   $idkorisnika=$_SESSION["idkorisnika"];
	   if(isset($_POST['submit'])){

			
	   
	   // preuzimanje vrednosti sa forme
	   $nazivFirme=$_POST['nazivfirme'];
	   $brojRacunaFirme=$_POST['brojracunafirme'];
	   $brojTelefonaFirme=$_POST['brojtelefonafirme'];
	   $adresaFirme=$_POST['adresafirme'];
	   $idfirme=$_POST['idfirme'];			
	   
	   
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
			//echo $SQLkorisnik;
            $resultkorisnik = mysql_query($SQLkorisnik);
            $num_rowskorisnik = mysql_num_rows($resultkorisnik);
            if ($num_rowskorisnik>0) {
							$SQL = "UPDATE `".$bazapodataka."`.`Firma` SET NazivFirme='".$nazivFirme."',BrojRacunaFirme='".$brojRacunaFirme."',BrojTelefonaFirme='".$brojTelefonaFirme."',AdresaFirme='".$adresaFirme."' WHERE IdFirme=".$idfirme;
							/*echo $SQL;*/
            				$retval = mysql_query( $SQL, $db_handle );
							$greska= mysql_error();
        			           }
				} // od if db selected
				mysql_close($db_handle);
				// prikaz uspeha aktivnosti	
	echo "Ukupno procesirano $retval zapisa";
	echo "Greska $greska";
 }
      
	header ('Location:ListaFirmi.php');	
		
	  
      ?>

