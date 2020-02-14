<?php

Kirby::plugin('candyblue/kirby3-gtm', [
  'snippets' => [
    'gtm/gtm-script' => __DIR__ . '/snippets/gtm/gtm-script.php',
    'gtm/gtm-noscript' => __DIR__ . '/snippets/gtm/gtm-noscript.php',
  ],
  'blueprints' => [
    'fields/gtmId' => __DIR__ . '/blueprints/fields/gtmId.yml'
  ]
  'siteMethods' => [
    'gtmId' => function () {
      return $this->gtmId()->isNotEmpty()? $this->gtmId() : option('candyblue.kirby3-gtm.id');
    }
  ]
]);

/*
function gtmId() {
  return kirby()->site()->gtmId()->isNotEmpty() ? kirby()->site()->gtmId()->value() : option('candyblue.kirby3-gtm.id');
}
*/
