---
title: "Rule ordered_traits - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/ordered_traits"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ordered_traits`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#rule-ordered-traits "Permalink to this heading")

Trait `use` statements must be sorted alphabetically.

## Warnings[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#this-rule-is-risky "Permalink to this heading")

Risky when depending on order of the imports.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `case_sensitive`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#configuration "Permalink to this heading")

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#case-sensitive "Permalink to this heading")

Whether the sorting should be case sensitive.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php class Foo {
-use Z; use A; }
+use A; use Z; }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#example-2 "Permalink to this heading")

With configuration: `['case_sensitive' => true]`.

```
--- Original
+++ New
 <?php class Foo {
-use Aaa; use AA; }
+use AA; use Aaa; }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\OrderedTraitsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/OrderedTraitsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\OrderedTraitsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/OrderedTraitsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
