
<!-- saved from url=(0083)http://foad2.unicaen.fr/moodle/pluginfile.php/201152/course/section/11858/tp3B.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>@media print {#ghostery-purple-box {display:none !important}}</style></head><body cz-shortcut-listen="true">
<table>
<form method="post" action="traitement.php" name="form_user"></form><tbody><tr>
<td><label> Nom</label></td>
<td><input type="text" name="nom" size="" value="<?php echo $nom; ?>"></td>
</tr>
<tr>
<td><label> Prénom</label></td>
<td><input type="text" name="prenom" size="" value="<?php echo $prenom; ?>"></td>
</tr>
<tr>
<td><label> Date de Naissance</label></td>
<td><input type="text" name="dateN" size="" value="<?php echo $dateN; ?>"></td>
</tr>
<tr>
<td><label> Lieu de Naissance</label></td>
<td><input type="text" name="lieuN" size="" value="<?php echo $lieuN; ?>"></td>
</tr>
<tr>
<td><label> Code Postal</label></td>
<td><input type="text" name="codeP" size="" value="<?php echo $codeP; ?>"></td>
</tr>
<tr>
<td><label> Téléphone</label></td>
<td><input type="text" name="telephone" size="" value="<?php echo $telephone; ?>"></td>
</tr>
<tr>
<td><label> Email</label></td>
<td><input type="text" name="email" size="" value="<?php echo $email; ?>"></td>
</tr>

<tr>

<td><label> Ville</label></td>
<td><select name="ville" size="1">
	<option value="Choisir une ville" <?php="" echo="" $coche["choisir="" une="" ville"];="" ?=""> >Choisir une ville</option>
	<option value="Amiens" <?php="" echo="" $coche["amiens"];="" ?=""> >Amiens</option>
	<option value="Paris" <?php="" echo="" $coche["paris"];="" ?=""> >Paris</option>
	<option value="Lyon" <?php="" echo="" $coche["lyon"];="" ?=""> >Lyon</option>
     </select></td>
</tr>

<tr>
<td><label> Civilité</label></td>
<td>	<input type="radio" name="civilite" value="homme" <?php="" echo="" $coche["homme"];="" ?="">/>Homme
	<input type="radio" name="civilite" value="femme" <?php="" echo="" $coche["femme"];="" ?="">/>Femme
</td>
</tr>
<tr>
<td><label> Commentaire</label></td>
<td><textarea name="comment" cols="40" rows="3"><?php echo $_POST["comment"]; ?> </textarea></td>
</tr>


<tr>

<td><input type="submit" name="user_valider" value="Valider" size=""></td>
</tr>

</tbody></table>




<div id="ghostery-purple-box" class="ghostery-bottom ghostery-right ghostery-none ghostery-collapsed"><div id="ghostery-box"><div id="ghostery-count" style="background: none; color: rgb(255, 255, 255);">0</div><div id="ghostery-pb-icons-container"><span id="ghostery-breaking-tracker" class="ghostery-pb-tracker" title="Mouchards sur les pages inaccessibles" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/breaking-icon.svg&quot;); opacity: 0.5;"></span><span id="ghostery-slow-tracker" class="ghostery-pb-tracker" title="Mouchards lents" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/slow-icon.svg&quot;); opacity: 0.5;"></span><span id="ghostery-non-secure-tracker" class="ghostery-pb-tracker" title="Mouchards non sécurisés" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/non-secure-icon.svg&quot;); opacity: 0.5;"></span></div><div id="ghostery-title">Recherche</div><div id="ghostery-minimize"><span id="ghostery-minimize-icon"></span></div><span id="ghostery-close" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/collapse.svg&quot;);"></span></div><div id="ghostery-pb-background"><div id="ghostery-trackerList"></div></div></div></body></html>
