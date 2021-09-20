<?php
require_once 'data.json';
require_once 'json_util.php';
$num=$_GET['q'];
$classmates=readJsonArray();
$tempArray=$classmates;
unset($classmates[$num]);
writeJason($classmates);
?>

<div class="alert">
    <span class="closet" onclick="this.parentElement.style.display='none';">The user <?=$tempArray[$num]['name']?> has now been removed!!</span>
</div>

