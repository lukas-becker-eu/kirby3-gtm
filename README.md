# Google Tag Manager for kirby 3
Integrate Google Tag Manager tracking code into your kirby 3 site

## Installation
### Download
Download this repo, extract the files and copy them to ```/site/plugins/gtm```.

### Git submodule
```$ git submodule add https://github.com/wearecandyblue/kirby3-gtm.git site/plugins/gtm ```

### Composer
```composer require wearecandyblue\gtm```

## Usage
### Default behaviour
To ensure that no data is collected during development this plugin is **inactive as default**.

You have to explicitely activate it via config option. We recommend to specify the activation in a domain specific configuration file, e.g. ```/site/config/config.yourdomain.com.php```.


``` $ git submodule update --recursive --remote ```

### Configuration
There are only three config options:
- Activation
- Google Tag Manager ID

```
return [
  'candyblue.kirby3-gtm' => true,
  'candyblue.kirby3-gtm.id' => 'GTM-XXXXXXX',
  'candyblue.kirby3-gtm.dnt' => true
];
```

#### Panel fields
You can access two of them via panel.
This plugin provides two panel fields.
You can provide the plugin options via panel field in your ```site.yml```:

```
fields:
  gtmId: fields/gtmId
```

### Use it in your templates/snippets
Embed the JavaScript and non-JavaScript code pieces via Kirby's snippet() helper function.

1. Place the ```gtm-script.php```-file as close to the opening ```<head>``` tag as possible with ```<?php snippet('gtm/gtm-script') ?>```
2. Place the ```gtm-noscript.php```-file immediately after the opening ```<body>``` tag with ```<?php snippet('gtm/gtm-noscript') ?>```


### Multi-environment setup
You can use this plugin in multi-environment setups. Place an individual Google Tag Manager ID per domain in the domain specific configuration file.

### DNT
One concrete way we commit to user privacy is by honoring Do Not Track (“DNT”) browser settings.
