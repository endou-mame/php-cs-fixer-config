---
title: "Rule function_to_constant - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/function_to_constant"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `function_to_constant`[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#rule-function-to-constant "Permalink to this heading")

Replace core functions calls returning constants with the constants.

## Warnings[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#this-rule-is-risky "Permalink to this heading")

Risky when any of the configured functions to replace are overridden.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `functions`.

## Configuration[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#configuration "Permalink to this heading")

### `functions`[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#functions "Permalink to this heading")

List of function names to fix.

Allowed values: a subset of `['get_called_class', 'get_class', 'get_class_this', 'php_sapi_name', 'phpversion', 'pi']`

Default value: `['get_called_class', 'get_class', 'get_class_this', 'php_sapi_name', 'phpversion', 'pi']`

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-echo phpversion();
-echo pi();
-echo php_sapi_name();
+echo PHP_VERSION;
+echo M_PI;
+echo PHP_SAPI;
 class Foo
 {
     public function Bar()
     {
-        echo get_class();
-        echo get_called_class();
+        echo self::class;
+        echo static::class;
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#example-2 "Permalink to this heading")

With configuration: `['functions' => ['get_called_class', 'get_class_this', 'phpversion']]`.

```
--- Original
+++ New
 <?php
-echo phpversion();
+echo PHP_VERSION;
 echo pi();
 class Foo
 {
     public function Bar()
     {
         echo get_class();
-        get_class($this);
-        echo get_called_class();
+        static::class;
+        echo static::class;
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/FunctionToConstantFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\FunctionToConstantFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/FunctionToConstantFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
