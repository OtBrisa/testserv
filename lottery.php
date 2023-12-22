<?PHP
 //Criado por Dhenyz Shady from shadyroom.blogspot.com
 //Favor manter os créditos / Please keep the credits
 //Use e abuse / Enjoy!
 header("Content-Type: text/html; charset=ISO-8859-1",true) ;
$lotterys = $SQL->query("SELECT `id`, `name`, `item` FROM lottery ORDER BY `id` ASC LIMIT 12;");
$players = 0;

     $main_content .= ' <h1><center>'.$config['server']['serverName'].' Lottery System</center></h1>

Esse sistema sorteia de <b>1 em 1 hrs</b> um player <font color="green">ONLINE</font> no servidor para dar um item a ele!
';
    if(empty($lotterys))
    {
        $main_content .= '<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD CLASS=white><b>Auctions</b></td></TR><TR BGCOLOR='.$config['site']['darkborder'].'><TD>Currently is no one active Auction.</TD></TR></TABLE>';
        $main_content .= '<br /><p align="right"><small></small></p>';
    }
    else
    {
    foreach($lotterys as $lottery) {
        $players++;
            if(is_int($players / 2))
                $bgcolor = $config['site']['lightborder'];
            else
                $bgcolor = $config['site']['darkborder'];
        $cost = round($auction['cost']/1000, 2);
        $content .= '<TR BGCOLOR='.$bgcolor.'><TD><center>'.$lottery['id'].'</center></TD><TD><center>'.$lottery['item'].'</center></TD><TD><center><a href="?subtopic=characters&name='.urlencode($lottery['name']).'">'.$lottery['name'].'</a></center></TD></TR>';
    }

    $main_content .= 'Os últimos 12 sorteios:<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD CLASS=white><b><center>ID</center></b></TD><TD class="white"><b><center>Item</center></b></TD><TD class="white"><b><center>Sortudo</center></b></td></TR>'.$content.'</TABLE>';
    $main_content .= '';
}
?>