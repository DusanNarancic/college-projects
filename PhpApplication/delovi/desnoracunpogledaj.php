
<meta charset="UTF-8">
<!--==================================== SADRZAJ STRANICE DESNO pocinje ovde ------------------------------>
<img src="images/sredinagore.jpg" width="100%" height="3" alt="" class="flt1 rp_topcornn" /> 
<table style="width:100%;style="width:100%; padding:0" align="center" cellspacing="0" cellpadding="0" border="0"  bgcolor="#D8E7F4">
<tr>
<td style="width:5%;">
</td>
<td align="left">

<font face="Trebuchet MS" color="darkblue" size="4px">
<?php
				echo "<BR>";
				echo "<table style=\"width:90%; padding:0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"  bgcolor=\"#D8E7F4\">";
				echo "<tr>";
				echo "<b><font face = \ size=\"3\"><a href=\"PrikazRacuna.php\" width=\"150\" height=\"150\"/>>>NAZAD</a></center></font><br/>";
				echo "</tr>";
				echo "<BR>";
				echo "<tr>";
				echo "<td style=\"padding:0\" align=\"left\" valign=\"top\">";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Id usluge: $IdUsluge</font><br/>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum kreiranja racuna: $DatumKreiranjaRacuna</font><br/>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Iznos za uplatu: $IznosZaUplatu</font><br/>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum roka placanja: $DatumRokaPlacanja</font><br/>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum uplate: $DatumUplate</font><br/>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum prispeća: $DatumPrispeca</font><br/>";
				echo "</td>";
				
								
				echo "</tr>";
				echo "</table>";
				
				echo "<br/>";
				
				
           //mysql_close($db_handle);

?>

</td>

<td style="width:5%;">
</td>

</tr>
</table>
<img src="images/sredinadole.jpg" width="100%" height="5" alt="" class="flt1" /> 
    