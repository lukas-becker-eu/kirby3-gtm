<?php if($site->gtmId()->isNotEmpty() || isset(option('candyblue.kirby3-gtm.id'))): ?>
<?php $gtmId = $site->gtmId()->isNotEmpty() ? $site->gtmId()->value() : option('candyblue.kirby3-gtm.id') ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtmId ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif ?>
