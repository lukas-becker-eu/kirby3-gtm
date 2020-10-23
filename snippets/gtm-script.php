<?php if(!empty(gtmId())): ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
<<<<<<< HEAD:snippets/gtm-script.php
})(window,document,'script', '<?= option('candyblue.kirby3-gtm.dataLayer') ?>','<?= gtmId() ?>');</script>
=======
})(window,document,'script','dataLayer','<?= gtmId() ?>');</script>
>>>>>>> 48049a96487ddd0675e97741f82b4b43d2936227:snippets/gtm/gtm-script.php
<!-- End Google Tag Manager -->
<?php endif ?>
