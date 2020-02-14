<?php

Kirby::plugin('candyblue/kirby3-gtm', [
  'options' => [
    'apiKey' => 'default-api-key'
  ],
  'snippets' => [
    'gtm/gtm-script' => __DIR__ . '/snippets/gtm/gtm-script.php',
    'gtm/gtm-noscript' => __DIR__ . '/snippets/gtm/gtm-noscript.php',
  ],
  'blueprints' => [
    'fields/gtmId' => __DIR__ . '/blueprints/fields/gtmId.yml'
  ],
  'siteMethods' => [
    'gtmId' => function () {
      return kirby()->site()->gtmId()->isNotEmpty() ? kirby()->site()->gtmId()->value() : option('candyblue.kirby3-gtm.id');
    }
  ]
  /*
  'blueprints' => [
    'fields/head' => __DIR__ . '/blueprints/fields/head.yml'
  ]
  */
]);

/*
function gtmScript() {
    echo "Hello world!";
}

function gtmNoscript() {
    echo "Hello world!";
}


function gtmId() {
  $gtmId = $site->gtmId()->isNotEmpty() ? $site->gtmId()->value() : option('candyblue.kirby3-gtm.id');
  return $gtmId;
}

/*if($site->gtmId()->isNotEmpty() || null !== option('candyblue.kirby3-gtm.id')): ?>
<?php $gtmId = $site->gtmId()->isNotEmpty() ? $site->gtmId()->value() : option('candyblue.kirby3-gtm.id') ?>
*/
