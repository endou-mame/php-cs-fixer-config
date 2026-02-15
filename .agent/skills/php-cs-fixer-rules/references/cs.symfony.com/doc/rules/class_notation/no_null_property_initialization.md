---
title: "Rule no_null_property_initialization - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_null_property_initialization`[¶](https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization.html#rule-no-null-property-initialization "Permalink to this heading")

Properties MUST not be explicitly initialised with `null` except when they
have a type declaration (PHP 7.4).

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo {
-    public $bar = null;
+    public $bar;
     public ?string $baz = null;
     public ?string $baux;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo {
-    public static $foo = null;
+    public static $foo;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/NoNullPropertyInitializationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\NoNullPropertyInitializationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/NoNullPropertyInitializationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
