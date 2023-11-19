<?php if (!empty($slot)) : ?>

  <?php
  $dataLayer = option('lukasbecker.kirby3-gtm.dataLayer', 'dataLayer');
  $attrName = option('lukasbecker.kirby3-gtm.scriptAttr.name');
  $attrValue = option('lukasbecker.kirby3-gtm.scriptAttr.value');
  ?>

  <?php if (!empty($attrName) && !empty($attrValue)) : ?>
    <script <?= Html::attr($attrName, $attrValue) ?>>
      window.<?= $dataLayer ?> = window.dataLayer || [];
      window.<?= $dataLayer ?>.push(<?= $slot ?>);
    </script>
  <?php else : ?>
    <script>
      window.<?= $dataLayer ?> = window.dataLayer || [];
      window.<?= $dataLayer ?>.push(<?= $slot ?>);
    </script>
  <?php endif ?>
<?php endif ?>