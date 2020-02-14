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
    'fields/head' => __DIR__ . '/blueprints/fields/gtmId.yml'
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
*/
