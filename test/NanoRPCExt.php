<?php 

require_once __DIR__ . '/autoload.php';

$nanorpcext = new php4nano\NanoRPCExt('localhost', 7076);

$account = 'nano_3dyo9e7wkf8kuykghbjdt78njux3yudhdrhtwaymc8fsmxhxpt1h48zffbse';

$return = $nanorpcext->account_balance(['account' => $account]);

print_r($return);
