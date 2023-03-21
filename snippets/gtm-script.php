<?php if(!empty(option('lukasbecker.kirby3-gtm.id'))): ?>
<!-- Google Tag Manager -->
<?php if(!empty(option('lukasbecker.kirby3-gtm.scriptAttr.name')) && !empty(option('lukasbecker.kirby3-gtm.scriptAttr.value'))): ?>
<script <?= Html::attr(option('lukasbecker.kirby3-gtm.scriptAttr.name'), option('lukasbecker.kirby3-gtm.scriptAttr.value')) ?>>
<?php elseif(!empty(option('lukasbecker.kirby3-gtm.scriptAttr.name'))): ?>
<script <?= Html::attr(option('lukasbecker.kirby3-gtm.scriptAttr.name')) ?>>
<?php else: ?>
<script>
<?php endif ?>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'<?= option('lukasbecker.kirby3-gtm.url', 'https://www.googletagmanager.com') ?>/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script', '<?= option('lukasbecker.kirby3-gtm.dataLayer', 'dataLayer') ?>','<?= option('lukasbecker.kirby3-gtm.id') ?>');</script>
<!-- End Google Tag Manager -->
<?php endif ?>
