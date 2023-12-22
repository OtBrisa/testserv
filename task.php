<?php
	$main_content .= '
	<center><h1><b>Task Quest</center></h1></b>
	';
	
	$main_content .= '
	<ul>
	<li>
	Task: Sistema de miss&otilde;es, fale com o NPC "Grizzly Adams" logo acima do templo para que ele lhe diga uma miss&atilde;o, ap&oacute;s voc&ecirc; conclui-la ele lhe dar&aacute; um pr&ecirc;mio de acordo com a tabela abaixo:
	</li>
	</ul>
	';
	
	$main_content .= '
	<table border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['vdarkborder'].'">
	<th width=\"50%\"><font class=black><b>Legenda</b></font></th>
	</tr>
	</table>
	
	<table border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>Teleport</b></font></td>
	<td width=\"50%\"><font class=black><b>Teleporta voc&ecirc; para a Area especial de Bosses<b></font></td>
	</tr>
	</table>
	
	<table border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>Acesso Secreto</b></font></td>
	<td width=\"50%\"><font class=black><b>Ter&aacute; acesso a um lugar secreto.</b></font></td>
	</tr>
	</table>
	<br>
	';
	
	$main_content .='
	<table border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['vdarkborder'].'">
	<td width=\"50%\"><font class=white><b>Task</b></font></td>
	<td width=\"50%\"><font class=white><b>Premio</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>100 Dwarfs</b></font></td>
	<td width=\"50%\"><font class=black><b>1000000 Experience & 50000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>150 Goblins</b></font></td>
	<td width=\"50%\"><font class=black><b>2000000 Experience & 100000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>300 Rotworms</b></font></td>
	<td width=\"50%\"><font class=black><b>3000000 Experience & 120000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>500 Cyclops</b></font></td>
	<td width=\"50%\"><font class=black><b>4000000 Experience & 160000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>300 Crocodiles</b></font></td>
	<td width=\"50%\"><font class=black><b>5000000 Experience & 200000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>300 Tarantulas</b></font></td>
	<td width=\"50%\"><font class=black><b>6000000 Experience & 250000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>150 Amazons or Valkiries</b></font></td>
	<td width=\"50%\"><font class=black><b>7000000 Experience & 280000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>200 Stone Golems</b></font></td>
	<td width=\"50%\"><font class=black><b>8000000 Experience & 300000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>300 Vampires</b></font></td>
	<td width=\"50%\"><font class=black><b>9000000 Experience & 320000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>1000 Infernalists</b></font></td>
	<td width=\"50%\"><font class=black><b>10000000 Experience, 350000 GPs & Teleporte &Aacute;rea Secreta</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>300 Quara Scouts</b></font></td>
	<td width=\"50%\"><font class=black><b>11000000 Experience & 380000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>300 Quaras</b></font></td>
	<td width=\"50%\"><font class=black><b>12000000 Experience & 420000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>70 Water Elementals</b></font></td>
	<td width=\"50%\"><font class=black><b>13000000 Experience & 450000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>750 Hellspawns</b></font></td>
	<td width=\"50%\"><font class=black><b>14000000 Experience & 480000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>3000 Frost Dragons</b></font></td>
	<td width=\"50%\"><font class=black><b>15000000 Experience, 520000 GPs & Teleporte &Aacute;rea Secreta</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>1000 Hellfire/Massive Fire Elemental</b></font></td>
	<td width=\"50%\"><font class=black><b>16000000 Experience & 550000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>200 Mutated Rats</b></font></td>
	<td width=\"50%\"><font class=black><b>17000000 Experience & 600000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>500 Giant Spiders</b></font></td>
	<td width=\"50%\"><font class=black><b>18000000 Experience & 700000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>2000 Hydras</b></font></td>
	<td width=\"50%\"><font class=black><b>19000000 Experience & 800000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>2000 Furys</b></font></td>
	<td width=\"50%\"><font class=black><b>20000000 Experience, 900000 GPs & Teleporte &Aacute;rea Secreta</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>2000 Behemoths</b></font></td>
	<td width=\"50%\"><font class=black><b>21000000 Experience & 1000000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>1500 Serpents Spawns</b></font></td>
	<td width=\"50%\"><font class=black><b>22000000 Experience & 1200000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>500 Green Djinns</b></font></td>
	<td width=\"50%\"><font class=black><b>23000000 Experience & 1500000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>500 Blue Djinns</b></font></td>
	<td width=\"50%\"><font class=black><b>24000000 Experience & 1800000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>3000 Pirates</b></font></td>
	<td width=\"50%\"><font class=black><b>25000000 Experience & 2000000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>3000 Son of Verminors</b></font></td>
	<td width=\"50%\"><font class=black><b>26000000 Experience, 2500000 GPs & Teleporte &Aacute;rea Secreta</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>5000 Defilers</b></font></td>
	<td width=\"50%\"><font class=black><b>27000000 Experience & 3000000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>10000 Grim Reapers</b></font></td>
	<td width=\"50%\"><font class=black><b>28000000 Experience & 3500000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>3000 Undead Dragons</b></font></td>
	<td width=\"50%\"><font class=black><b>29000000 Experience & 4000000 GPs</b></font></td>
	</tr>
	
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width=\"50%\"><font class=black><b>6666 Demons</b></font></td>
	<td width=\"50%\"><font class=black><b>Acesso Secreto Mystery Quest(Falconia Quest)</b></font></td>
	</tr>
	</table>
	<br>
	';
	
	$main_content .= '
	<p align="right"><b>Page Task By <a href="mailto:fabiohenriquerodriques@hotmail.com" target="_blank"><u>Fabinho</u></b></a></p>
	';
?>