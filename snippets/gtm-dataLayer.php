<?php if(!empty($dataLayer)): ?>
<?php if(!empty(option('lukasbecker.kirby3-gtm.scriptAttr.name'))): ?>
<script <?= Html::attr(option('lukasbecker.kirby3-gtm.scriptAttr.name'), option('lukasbecker.kirby3-gtm.scriptAttr.value')) ?>>
<?php else: ?>
<script>
<?php endif ?>
  <?= option('lukasbecker.kirby3-gtm.dataLayer');?>.push(<?= json_encode($dataLayer) ?>);
</script>
<?php endif ?>
