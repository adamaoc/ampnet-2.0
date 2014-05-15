<?php

require_once "_flex/core/init.php";
require_once "_flex/functions/GetWork.php";
echo "testing <br />";

$work = get_single_work('work/txgarage');

print_r($work);