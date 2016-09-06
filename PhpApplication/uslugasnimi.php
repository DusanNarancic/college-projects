
 <?php
        
		session_start();  
	   // citanje vrednosti iz sesije - da bismo uvek proverili da li je to prijavljeni korisnik
	   $idkorisnika=$_SESSION["idkorisnika"];
	   if(isset($_POST['submit'])){
	   
	   // preuzimanje vrednosti sa forme
	   $IdUgovora=$_POST['idUgovora'];
	   $datumPoslednjePromene=$_POST['datumPoslednjePromene'];
	   $nazivfirme=$_POST['naziv'];
	   $Jmbg=$_POST['jmbg'];
	   $stanjeNaRacunu=$_POST['stanje'];
  
	   	   
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
						/*	$Sql = "SELECT `".$bazapodataka."`.`Firma`.NazivFirme  FROM `".$bazapodataka."`.`Firma` INNER JOIN `".$bazapodataka."`.`Ugovor` ON `".$bazapodataka."`.`Firma`.`IdFirme`=`".$bazapodataka."`.`Ugovor`.`IdFirme` WHERE `".$bazapodataka."`.`Ugovor`.`IdKorisnika`=".$idkorisnika;
							$result = mysql_query($Sql,$db_handle);
							$num_rows = mysql_num_rows($result);*/
							/*$greska= mysql_error();
							if ($num_rows>0) {*/
							
								// ocitavanje max id za id rukopisa
							$Sql="SELECT IdFirme FROM `".$bazapodataka."`.`Firma` WHERE NazivFirme='".$nazivfirme."'";
            				$result = mysql_query( $Sql, $db_handle );
							$num_rows = mysql_num_rows($result);
							
							$SQL="SELECT IdKorisnika FROM `".$bazapodataka."`.`KorisnikUsluge` WHERE JMBG='".$Jmbg."'";
							$result2=mysql_query($SQL, $db_handle);
							$num_rows2 = mysql_num_rows($result2);
							
							
							if ($num_rows>0 and $num_rows2>0) {
							$row=0; 
							
							$IdFirme=mysql_result($result,$row,"IdFirme");
							$idKorisnika=mysql_result($result2,$row,"IdKorisnika");
							//$NAZIVDELA=mysql_result($result,$row,"NAZIVDELA");
							
									
							$SQL2 = "INSERT INTO `".$bazapodataka."`.`Usluga` (IdFirme,IdUgovora,IdKorisnika,DatumPoslednjePromene,StanjeNaRacunu) VALUES ($IdFirme,'$IdUgovora',$idKorisnika,'$datumPoslednjePromene','$stanjeNaRacunu')";
							$retval = mysql_query( $SQL2,$db_handle );
							  }     
							  
							  $greska= mysql_error();
							  
							  }
							 
							
				} // od if db selected
}
      mysql_close($db_handle);
	
	// prikaz uspeha aktivnosti	
/*	echo "Ukupno procesirano $result zapisa";
	echo "Greska $greska";	 */
/*	echo "Ukupno procesirano $retval zapisa";
	echo "Greska $greska2";*/
		
	  ?>
	  