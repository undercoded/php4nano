<?php

require_once __DIR__ . '/../../lib/NanoTool.php';

use php4nano\NanoTool as NanoTool;

$private_key = '0F83D2E2B768F59238783FCEA893B39105D6E0E944523B3E6B73757D7A29970C';
$msg         = '36E778DEDF4094AD9424C28F3198150328FD33B9A08BEA88C177A11B898E156B';

var_dump(NanoTool::signMsg($private_key, $msg));
