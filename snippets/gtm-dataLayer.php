<?php if(!empty($dataLayer)): ?>
<script>
  <?= option('lukasbecker.kirby3-gtm.dataLayer');?>.push(<?= json_encode($dataLayer) ?>);
</script>
<?php endif ?>
