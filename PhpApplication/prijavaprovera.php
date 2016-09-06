<?php
session_start();
       $loginusername=$_POST['korisnickoIme'];
       $loginpassword=$_POST['lozinka'];

	require 'delovi/kod_parametrikonekcije.php';
	
	$db_handle = mysql_connect($server, $user_name, $password);

       if (!$db_handle) {
                die('Nije uspostavljena veza sa serverom baze podataka. Greška: ' . mysql_error());
                //echo "<br/>";
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
                //echo "<br/>";
                        }
                        else
                        {
                         //echo " Uspesna konekcija ka bazi podataka! ";
                         //echo "<br/>";
                        }


       if ($db_selected)
           {
	    // dodatak da moze da radi sa UTF8
	    mysql_query('SET NAMES "utf8"',$db_handle);

            $SQL = "SELECT * FROM `".$bazapodataka."`.`KorisnikUsluge` WHERE KorisnickoIme='".$loginusername."' AND Lozinka='".$loginpassword."'";
            $result = mysql_query($SQL);
            $num_rows = mysql_num_rows($result);
            if ($num_rows>0) {
				$row=0;	
				$idkorisnika=mysql_result($result,$row,"IdKorisnika");				
				$prez=mysql_result($result,$row,"PrezimeKorisnika");
				$ime=mysql_result($result,$row,"ImeKorisnika"); 
				$vrstakorisnika=mysql_result($result,$row,"VrstaKorisnika");
				if ($jepredstavnikfirme==1)
				{
				($vrstakorisnika="PredstavnikFirme");
				}
				
				$korisnik=$prez.' '.$ime;
			      } else {
				$korisnik='NEPOZNAT KORISNIK';
				}
 	    } // od if db selected
            mysql_close($db_handle);
			// rad sa sesijama
			$_SESSION["prez"] = $prez;
			$_SESSION["ime"] = $ime;
			$_SESSION["idkorisnika"] = $idkorisnika;
			$_SESSION["korisnik"] = $korisnik;
			$_SESSION ["vrstakorisnika"] = $vrstakorisnika;
			
	switch ($vrstakorisnika) {
    case 'PredstavnikFirme':
        header ('Location:WelcomeFirma.php');
        break;
    case 'ObicanKorisnik':
        header ('Location:Welcome.php');
        break;
	case 'Administrator':
        header ('Location:WelcomeAdministrator.php');
        break;
		case '':
       header ('Location:prijava.php');
        break;
}
			
			// redirekt na drugu stranicu
			//prosledjivanje preko URL: header ('Location:Welcome.php?korisnik='.$korisnik);
			/*header ('Location:Welcome.php');*/
?>
