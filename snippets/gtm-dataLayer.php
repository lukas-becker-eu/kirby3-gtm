<?php if(!empty($dataLayer)): ?>
<script>
  <?= option('candyblue.kirby3-gtm.dataLayer');?>.push(<?= json_encode($dataLayer) ?>);
</script>
<?php endif ?>
