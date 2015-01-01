yii2-simple_html_dom
====================

Simple HTML DOM parser extension for Yii 2 framework.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist garyjl/yii2-simplehtmldom "*"
```

or add

```
"garyjl/yii2-simplehtmldom": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \garyjl\simplehtmldom\SimpleHTMLDom::file_get_html('http://google.com'); ?>```

See more: http://simplehtmldom.sourceforge.net/
