<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('lukasbecker/kirby3-gtm', [
  'options' => [
    'dataLayer' => 'dataLayer',
    'url' => 'https://www.googletagmanager.com',
    'scriptAttr' => [
      'name' => null,
      'value' => null
    ],
    'adStorage' => 'denied',
    'analyticsStorage' => 'denied',
    'functionalityStorage' => 'denied',
    'personalizationStorage' => 'denied',
    'securityStorage' => 'granted',
    'waitForUpdate' => 500,
    'adsDataRedaction' => 'true',
    'urlPassthrough' => 'false',
  ],
  'snippets' => [
    'gtm-script' => __DIR__ . '/snippets/gtm-script.php',
    'gtm-noscript' => __DIR__ . '/snippets/gtm-noscript.php',
    'gtm-dataLayer' => __DIR__ . '/snippets/gtm-dataLayer.php',
    'gtm-consent-mode' => __DIR__ . '/snippets/gtm-consent-mode.php'
  ],
]);
