<?php foreach ($actionToCall['content'] as $value): ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title" style="overflow:auto;">
            <h2 class="pull-left"><?= $value->getId(); ?>.<?= $value->getTitre(); ?></h2>
            <h6 class="pull-right"><?= $value->getAuteur(); ?></h6>
            <h6 class="pull-right"><?= $value->getCreated(); ?></h6>
        </div>
    </div>
    <div class="panel-body">
        <?= $value->getDescription(); ?>
    </div>
</div>

<?php endforeach; ?>