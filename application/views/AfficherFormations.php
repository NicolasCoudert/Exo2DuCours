<?php

foreach($lesFormations as $uneFormation)
{  
    echo "<input name='optFormation' onclick=AfficherAgents(this.value) type='radio' value='". $uneFormation->code ."'>".$uneFormation->intitule."</br>"; 
}
?>