<?php 

require __DIR__ . '/../autoload.php';

$account = 'ban_3dyo9e7wkf8kuykghbjdt78njux3yudhdrhtwaymc8fsmxhxpt1h48zffbse';

$cycles = 10000;


// * API v1

$bananorpc = new MikeRow\Bandano\BananoRPC('http', 'localhost', 7076);

$bananorpc->setBananoApi(1);

$t0 = microtime(true);

for ($i = 0; $i < $cycles; $i++) {
    $bananorpc->account_weight(['account' => $account]);
}

echo 'Time v1: ' . (microtime(true) - $t0) . PHP_EOL;


// * API v2

$bananorpc = new MikeRow\Bandano\BananoRPC('http', 'localhost', 7076, 'api/v2');

$bananorpc->setBananoApi(2);

$t0 = microtime(true);

for ($i = 0; $i < $cycles; $i++) {
    $bananorpc->AccountWeight(['account' => $account]);
}

echo 'Time v2: ' . (microtime(true) - $t0) . PHP_EOL;
