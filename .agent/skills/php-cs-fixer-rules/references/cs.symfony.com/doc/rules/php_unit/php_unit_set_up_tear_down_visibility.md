---
title: "Rule php_unit_set_up_tear_down_visibility - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_set_up_tear_down_visibility`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html#rule-php-unit-set-up-tear-down-visibility "Permalink to this heading")

Changes the visibility of the `setUp()` and `tearDown()` functions of
PHPUnit to `protected`, to match the PHPUnit TestCase.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html#this-rule-is-risky "Permalink to this heading")

This fixer may change functions named `setUp()` or `tearDown()` outside of
PHPUnit tests, when a class is wrongly seen as a PHPUnit test.

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     private $hello;
-    public function setUp()
+    protected function setUp()
     {
         $this->hello = "hello";
     }

-    public function tearDown()
+    protected function tearDown()
     {
         $this->hello = null;
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitSetUpTearDownVisibilityFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitSetUpTearDownVisibilityFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
