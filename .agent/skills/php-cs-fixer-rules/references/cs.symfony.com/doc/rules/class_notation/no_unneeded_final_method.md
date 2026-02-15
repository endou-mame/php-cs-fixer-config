---
title: "Rule no_unneeded_final_method - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unneeded_final_method`[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#rule-no-unneeded-final-method "Permalink to this heading")

Removes `final` from methods where possible.

## Warnings[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#this-rule-is-risky "Permalink to this heading")

Risky when child class overrides a `private` method.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `private_methods`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#configuration "Permalink to this heading")

### `private_methods`[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#private-methods "Permalink to this heading")

Private methods of non-`final` classes must not be declared `final`.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class Foo
 {
-    final public function foo1() {}
-    final protected function bar() {}
-    final private function baz() {}
+    public function foo1() {}
+    protected function bar() {}
+    private function baz() {}
 }

 class Bar
 {
-    final private function bar1() {}
+    private function bar1() {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#example-2 "Permalink to this heading")

With configuration: `['private_methods' => false]`.

```
--- Original
+++ New
 <?php
 final class Foo
 {
-    final private function baz() {}
+    private function baz() {}
 }

 class Bar
 {
     final private function bar1() {}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#rule-sets "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/NoUnneededFinalMethodFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\NoUnneededFinalMethodFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/NoUnneededFinalMethodFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
