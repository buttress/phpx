<?php

require_once __DIR__ . '/../vendor/autoload.php';
$x = new Buttress\Phpx\Phpx();
?>

<div>
    You can <strong>mix</strong> and <?= $x->render($x->strong(c: 'match')) ?>
</div>
