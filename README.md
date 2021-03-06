<p align="center">
    <a href="https://github.com/terabytesoftw/app-template-basic" target="_blank">
        <img src="https://lh3.googleusercontent.com/D9TFw1F6ddPuheDc_tpNptTdvTg-FNNpjLSBN14X6Sc-3JDiOxfE67rEh4OZfygonx1tKei2b2DEOHDLjF6T3xl8e-rkEEPZeGqLTWcS_v2cBRlyo0vcZLDHG5ivSDGIWCsenbol=w2400" height="50px;">
    </a>
    <h1 align="center">Project Skeleton Application Basic</h1>
</p>

<p align="center">
    <a href="https://packagist.org/packages/terabytesoftw/app-template-basic" target="_blank">
        <img src="https://poser.pugx.org/terabytesoftw/widget-alert/v/unstable.svg" alt="Unstable Version">
    </a>
    <a href="https://travis-ci.org/terabytesoftw/app-template-basic" target="_blank">
        <img src="https://travis-ci.org/terabytesoftw/app-template-basic.svg?branch=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/app-template-basic" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/app-template-basic/badges/build.png?b=master" alt="Build Status">
    </a>
    <a href="https://codeclimate.com/github/terabytesoftw/app-template-basic/maintainability">
        <img src="https://api.codeclimate.com/v1/badges/f8f067287ac8ca7bfb43/maintainability" alt="Maintainability">
    </a>
	<a href="https://github.styleci.io/repos/192995606">
		<img src="https://github.styleci.io/repos/192995606/shield?branch=master" alt="StyleCI">
	</a>		
</p>
</br>

<p align="justify">
<strong>Yii 2.0 Web Project Skeleton Application Basic</strong>, is the structure for <strong>Yii 2.0 Web Application Basic</strong>, this allows you to update the <strong>Web Application Basic</strong> without having to re-install, all the details of your installation, configuration and start-up at <a href="https://github.com/terabytesoftw/app-template-basic" title="Yii 2.0 Web Project Skeleton Application Basic" target="_blank">Yii 2.0 Web Project Skeleton Application Basic</a>
</p>

</br>

### **DIRECTORY STRUCTURE:**

```
config/             contains application configurations
messages/           contains application translations messages
public/             contains the entry script for a web server
    @runtime/       contains files generated during runtime
    aseets/         contains assets web application basic
node_modules/       contains dependency assets
tests/              contains tests codeception
vendor/             contains dependent 3rd-party packages
```

### **GENERATE MESSAGES TRANSLATION:**

<p align="justify">
To generate the Yii 2.0 Web Application Basic translations, you can change the language settings in:
<p>

```
config/messages.php - [app-template-basic]:

'languages' => ['en'], 
```
<p align="justify">
Automatically the generator will create the folder of your language in /messages - [app-template-basic], If any translation is needed, you can open an issue to add it.
</p>

```
root directory - [app-template-basic]:
./vendor/bin/yii message config/messages.php
```

### **RUN TESTS CODECEPTION:**

~~~
// download & run crhomedriver version chrome desktop
$ wget -P vendor/bin https://chromedriver.storage.googleapis.com/75.0.3770.90/chromedriver_linux64.zip
$ unzip -o -q vendor/bin/chromedriver_linux64.zip
$ vendor/bin/chromedriver --port=9515 --url-base=wd/hub/ > /dev/null 2>&1&

// run web server cli php
$ php -S 127.0.0.1:8080 -t public > /dev/null 2>&1&

// run all tests without coverage
$ vendor/bin/codecept run
~~~

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

[Style CI Documentation PSR2.](https://docs.styleci.io/presets#psr2)

### **LICENCE:**

[![License](https://poser.pugx.org/terabytesoftw/widget-alert/license.svg)](LICENSE.md)
[![YiiFramework](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Total Downloads](https://poser.pugx.org/terabytesoftw/widget-alert/downloads.svg)](https://packagist.org/packages/terabytesoftw/app-template-basic)
