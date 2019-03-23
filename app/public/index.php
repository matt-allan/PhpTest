<?php

declare(strict_types=1);

$env = getenv();
//foreach ($env as $key => $value) {
//    var_dump($key);
//    echo "<br/>\n";
//}

$var = 'FOO';
var_dump(getenv($var));
var_dump($env[$var]);
var_dump($var);


echo "variables_order is: <br/>";
var_dump(ini_get("variables_order"));
echo "<br/>";

echo "auto_globals_jit is: <br/>";
var_dump(ini_get("auto_globals_jit"));
echo "<br/>";



