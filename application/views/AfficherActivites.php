<!DOCTYPE html>
<html>
<head>
	<title>Exemple du cours</title>
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
</head>
<body>
    <p>Choix de l'activité</p>
    <select id="lstCategories" onchange="AfficherFormation(this.value)">
<?php
    foreach ($lesActivites as $uneActivite)
    {
?>
    <option name="categ" value="<?php echo $uneActivite->numero ; ?>" ><?php echo $uneActivite->libelle ; ?>
<?php
    }
?>
        </select>
    <br><br>
    <div id="divFormations"></div><br><br>
    <div id="divAgents"></div>
</body>
</html>

