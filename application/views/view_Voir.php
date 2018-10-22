<?php

foreach($lesConfs as $uneConf)
{
    echo "<input type='checkbox' value='".$uneConf->IDCONFERENCE."'> ".$uneConf->TITRE." ".$uneConf->NBVOTES."<br>";
}

?>