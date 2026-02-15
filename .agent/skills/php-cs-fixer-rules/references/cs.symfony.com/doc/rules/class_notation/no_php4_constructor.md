---
title: "Rule no_php4_constructor - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_php4_constructor`[¶](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html#rule-no-php4-constructor "Permalink to this heading")

Convert PHP4-style constructors to `__construct`.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html#this-rule-is-risky "Permalink to this heading")

Risky when old style constructor being fixed is overridden or overrides parent
one.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo
 {
-    public function Foo($bar)
+    public function __construct($bar)
     {
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/NoPhp4ConstructorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\NoPhp4ConstructorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/NoPhp4ConstructorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
