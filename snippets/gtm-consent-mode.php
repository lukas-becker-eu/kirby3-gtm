<!-- Google Consent Mode -->
<?php if(!empty(option('lukasbecker.kirby3-gtm.scriptAttr.name')) && !empty(option('lukasbecker.kirby3-gtm.scriptAttr.value'))): ?>
<script <?= Html::attr(option('lukasbecker.kirby3-gtm.scriptAttr.name'), option('lukasbecker.kirby3-gtm.scriptAttr.value')) ?>>
<?php elseif(!empty(option('lukasbecker.kirby3-gtm.scriptAttr.name'))): ?>
<script <?= Html::attr(option('lukasbecker.kirby3-gtm.scriptAttr.name')) ?>>
<?php else: ?>
<script>
<?php endif ?>
    window.<?= option('lukasbecker.kirby3-gtm.dataLayer', 'dataLayer') ?> = window.dataLayer || [];
    function gtag() {
        <?= option('lukasbecker.kirby3-gtm.dataLayer', 'dataLayer') ?>.push(arguments);
    }

    gtag("consent", "default", {
        ad_storage: "<?= option('lukasbecker.kirby3-gtm.ad_storage', 'denied') ?>",
        analytics_storage: "<?= option('lukasbecker.kirby3-gtm.analytics_storage', 'denied') ?>",
        functionality_storage: "<?= option('lukasbecker.kirby3-gtm.functionality_storage', 'denied') ?>",
        personalization_storage: "<?= option('lukasbecker.kirby3-gtm.personalization_storage', 'denied') ?>",
        security_storage: "<?= option('lukasbecker.kirby3-gtm.security_storage', 'granted') ?>",
        wait_for_update: <?= option('lukasbecker.kirby3-gtm.wait_for_update', 500) ?>,
    });

    gtag("set", "ads_data_redaction", <?= option('lukasbecker.kirby3-gtm.ads_data_redaction', 'true') ?>);
    gtag("set", "url_passthrough", <?= option('lukasbecker.kirby3-gtm.ads_data_redaction', 'false') ?>);
</script>
<!-- End Google Consent Mode -->