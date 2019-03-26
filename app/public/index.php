<?php

declare(strict_types=1);

var_dump(getenv());

// Uncomment this and the environment variables are returned above
// $whatever = $_ENV['SOMETHING'] ?? false;

echo "variables_order is: <br/>";
var_dump(ini_get("variables_order"));
echo "<br/>";

echo "auto_globals_jit is: <br/>";
var_dump(ini_get("auto_globals_jit"));
echo "<br/>";