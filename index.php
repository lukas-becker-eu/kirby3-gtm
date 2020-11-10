<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('candyblue/kirby3-gtm', [
  'options' => [
    'dataLayer' => 'dataLayer'
  ],
  'snippets' => [
    'gtm-script' => __DIR__ . '/snippets/gtm-script.php',
    'gtm-noscript' => __DIR__ . '/snippets/gtm-noscript.php',
    'gtm-dataLayer' => __DIR__ . '/snippets/gtm-dataLayer.php'
  ],
  'blueprints' => [
    'fields/gtmId' => __DIR__ . '/blueprints/fields/gtmId.yml'
  ]
]);


public function gtmId() {
  return kirby()->site()->gtmId()->isNotEmpty() ? kirby()->site()->gtmId()->value() : option('candyblue.kirby3-gtm.id');
}
