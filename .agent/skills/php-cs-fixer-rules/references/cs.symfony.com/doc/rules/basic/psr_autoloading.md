---
title: "Rule psr_autoloading - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/psr_autoloading"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `psr_autoloading`[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#rule-psr-autoloading "Permalink to this heading")

Classes must be in a path that matches their namespace, be at least one
namespace deep and the class name should match the file name.

## Warnings[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#this-rule-is-risky "Permalink to this heading")

This fixer may change your class name, which will break the code that depends on
the old name.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `dir`.

## Configuration[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#configuration "Permalink to this heading")

### `dir`[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#dir "Permalink to this heading")

If provided, the directory where the project code is placed.

Allowed types: `null` and `string`

Default value: `null`

## Examples[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 namespace PhpCsFixer\FIXER\Basic;
-class InvalidName {}
+class PsrAutoloadingFixer {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#example-2 "Permalink to this heading")

With configuration: `['dir' => './src']`.

```
--- Original
+++ New
 <?php
-namespace PhpCsFixer\FIXER\Basic;
-class InvalidName {}
+namespace PhpCsFixer\Fixer\Basic;
+class PsrAutoloadingFixer {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/PsrAutoloadingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\PsrAutoloadingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/PsrAutoloadingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
