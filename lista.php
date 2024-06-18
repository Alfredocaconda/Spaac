<?php 

$pasta="ARTIGOS/";
$diretorio=dir($pasta);



while($arquivo= $diretorio->read()){
    if($arquivo!='.' && $arquivo!='..'){

        echo "<a href=".$pasta.$arquivo."><img src='".$pasta.$arquivo."'widith='55'></a>";
    }
}