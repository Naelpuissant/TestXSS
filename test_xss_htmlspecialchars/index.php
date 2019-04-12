<?php
$a = htmlentities('onclick=alert(1)', ENT_QUOTES, 'UTF-8', false); 
echo '<a href="#" '.$a.'>link</a>';