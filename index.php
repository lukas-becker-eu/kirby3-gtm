<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('lukasbecker/kirby3-gtm', [
  'options' => [
    'dataLayer' => 'dataLayer'
  ],
  'snippets' => [
    'gtm-script' => __DIR__ . '/snippets/gtm-script.php',
    'gtm-noscript' => __DIR__ . '/snippets/gtm-noscript.php',
    'gtm-dataLayer' => __DIR__ . '/snippets/gtm-dataLayer.php'
  ],
]);
