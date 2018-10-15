<?php

foreach($lesAgents as $unAgent)
{  
    echo "<input type='checkbox' value='".$unAgent->code."'>".$unAgent->nom ." - ".$unAgent->prenom."</input><br>";
}

echo "<input type='button' value='Valider les préscences' onclick='ValiderPresences()'>";


?>